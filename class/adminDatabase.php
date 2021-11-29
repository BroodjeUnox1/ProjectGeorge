<?php
class adminDatabase
    {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "";
        private $database   = "george";
        public  $conn;


        // Database Connection
        public function __construct()
        {
            $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
            return $this->conn;
            }
        }

        // Insert data into drinks table
        public function insertDataDrinks($post)
        {
            $name = $this->conn->real_escape_string($_POST['name']);
            $description = $this->conn->real_escape_string($_POST['description']);
            $price = $this->conn->real_escape_string($_POST['price']);
            $category = $this->conn->real_escape_string($_POST['category_id']);
            $query="INSERT INTO drinks(name, description, price, category_id) VALUES('$name','$description','$price', '$category')";
            $sql = $this->conn->query($query);
            if ($sql==true) {
                header("Location:adminMenu.php");
            }else{
                var_dump($query, $sql);
                echo "Registration failed try again!";
            }
        }
        //insert data into categories table
        public function insertDataCategoriesDrinks($post)
        {
            $name = $this->conn->real_escape_string($_POST['name']);
            $query="INSERT INTO categoriesdrinks(name) VALUES('$name')";
            $sql = $this->conn->query($query);
            if ($sql==true) {
                header("Location: message.php?alert=insert_category_succes");
            }else{
                header("Location: message.php?alert=insert_category_error");
            }
        }

        // Fetch drinks records for show listing
        public function displayDataDrinks($id)
        {
            var_dump($_GET);
            // $id = $this->conn->real_escape_string($_GET['id']);
            $query = "SELECT * FROM drinks WHERE category_id = $id";
            // $id = "SELECT * FROM categoriesdrinks where 'id' = $id";
            $result = $this->conn->query($query);
            if($result){
                if ($result->num_rows > 0) {
                    $data = array();
                    while ($row = $result->fetch_assoc()) {
                        // if($row['category_id'] == $id) {

                            $data[] = $row;
                            // var_dump($data);
                        // }
                    }
                    return $data;
                }else{
                        var_dump($query); exit;
                    echo "No found records";
                    }
            }else {
                echo "error in ".$query."<br>".$this->conn->error;
            }
        }

        // Fetch categories records for show listing
        public function displayDataCategoriesDrinks()
        {
            $query = "SELECT * FROM categoriesdrinks";
            $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
            }
             return $data;
            }else{
             echo "No found records";
            }
        }

        // Fetch single data for edit from drinks table
        public function displyaRecordByIdDrinks($id)
        {
            $query = "SELECT * FROM drinks WHERE id = '$id'";
            $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }

        //Fetch single data for edit from categories table
        public function displyaRecordByIdCategoriesDrinks($id)
        {
            $query = "SELECT * FROM categoriesdrinks WHERE id = '$id'";
            $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }

        // Update drinks data into drinks table
        public function updateRecordDrinks($postData)
        {
            $name = $this->conn->real_escape_string($_POST['uname']);
            $description = $this->conn->real_escape_string($_POST['udescription']);
            $price = $this->conn->real_escape_string($_POST['uprice']);
            $id = $this->conn->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE drinks SET name = '$name', description = '$description', price = '$price' WHERE id = '$id'";
            $sql = $this->conn->query($query);
            if ($sql==true) {
                header("Location:index.php?msg2=update");
            }else{
                echo "Registration updated failed try again!";
            }
            }

        }

        // Update drinks data into drinks table
        public function updateRecordCategoriesDrinks($postData)
        {
            $name = $this->conn->real_escape_string($_POST['uname']);
            $id = $this->conn->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE categoriesdrinks SET name = '$name' WHERE id = '$id'";
            $sql = $this->conn->query($query);
            if ($sql==true) {
                header("Location: message.php?alert=update_category_succes");
            }else{
                echo "Registration updated failed try again!";
            }
            }

        }

        // Delete drinks data from drinks table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM drinks WHERE id = '$id'";
            $sql = $this->conn->query($query);
        if ($sql==true) {
            header("Location:index.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }

        // Delete drinks data from categories table
        public function deleteRecordCategoies($id)
        {
            $query = "DELETE FROM categoriesdrinks WHERE id = '$id'";
            $sql = $this->conn->query($query);
        if ($sql==true) {
            header("Location:index.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }

    }
?>