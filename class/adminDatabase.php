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
            $category = $this->conn->real_escape_string($_POST['category']);
            $query="INSERT INTO drinks(name, description, price, category_id) VALUES('$name','$description','$price', $category)";
            $sql = $this->conn->query($query);
            if ($sql==true) {
                header("Location:message.php?alert=insert_drink_succes");
            }else{
                var_dump($query, $sql);
                header("Location:message.php?alert=insert_drink_error");
            }
        }

        public function insertDataFood($post)
        {
            $name = $this->conn->real_escape_string($_POST['name']);
            $description = $this->conn->real_escape_string($_POST['description']);
            $price = $this->conn->real_escape_string($_POST['price']);
            $category = $this->conn->real_escape_string($_POST['category']);
            $vegitarian = $this->conn->real_escape_string($_POST['vegitarian']);
            $nuts = $this->conn->real_escape_string($_POST['nuts']);
            $query="INSERT INTO food(name, description, price, vegitarian, nuts, category_id) VALUES('$name','$description','$price', '$vegitarian', '$nuts', $category)";
            $sql = $this->conn->query($query);
            if ($sql==true) {
                // header("Location:message.php?alert=insert_drink_succes");
                echo 'yur';
            }else{
                var_dump($query, $sql);
                // header("Location:message.php?alert=insert_drink_error");
                echo 'nur';
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

        public function insertDataCategoriesFoods($post)
        {
            $name = $this->conn->real_escape_string($_POST['name']);
            $query="INSERT INTO categories_food(name) VALUES('$name')";
            $sql = $this->conn->query($query);
            if ($sql==true) {
                header("Location: message.php?alert=insert_category_food_succes");
                // echo 'yur';
            }else{
                header("Location: message.php?alert=insert_category_food_error");
                // echo 'nur';
            }
        }

        // Fetch drinks records for show listing
        public function displayDataDrinks()
        {
            $query = "SELECT * FROM drinks WHERE category_id = ".$_GET['catId'];
            $result = $this->conn->query($query);
            // echo $query;
            if($result){
                if ($result->num_rows > 0) {
                    $data = array();
                    while ($row = $result->fetch_assoc()) {

                            $data[] = $row;
                    }
                    return $data;
                }else{
                    echo "No found records";
                    }
            }else {
                var_dump($query, $_GET['catId']);
                echo "error in ".$query."<br>".$this->conn->error;
            }
        }

        public function displayDataFoods()
        {
            $query = "SELECT * FROM food WHERE category_id = ".$_GET['catId'];
            $result = $this->conn->query($query);
            // echo $query;
            if($result){
                if ($result->num_rows > 0) {
                    $data = array();
                    while ($row = $result->fetch_assoc()) {

                            $data[] = $row;
                    }
                    return $data;
                }else{
                    echo "No found records";
                    }
            }else {
                var_dump($query, $_GET['catId']);
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

        public function displayDataCategoriesFoods()
        {
            $query = "SELECT * FROM categories_food";
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
        public function displayRecordByIdDrinks($id)
        {
            $query = "SELECT * FROM drinks WHERE id = $id";
            $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }

        public function displayRecordByIdFoods($id)
        {
            $query = "SELECT * FROM food WHERE id = $id";
            $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }

        //Fetch single data for edit from categories table
        public function displayRecordByIdCategoriesDrinks($id)
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

        public function displayRecordByIdCategoriesFoods($id)
        {
            $query = "SELECT * FROM categories_food WHERE id = '$id'";
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
            $name = $this->conn->real_escape_string($_POST['name']);
            $description = $this->conn->real_escape_string($_POST['description']);
            $price = $this->conn->real_escape_string($_POST['price']);
            $id = $this->conn->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE drinks SET name = '$name', description = '$description', price = '$price' WHERE id = '$id'";
            $sql = $this->conn->query($query);
            if ($sql==true) {
                header("Location:message.php?alert=update_drink_succes");
            }else{
                header("Location:message.php?alert=update_drink_error");

            }
            }

        }

        public function updateRecordFoods($postData)
        {
            $name = $this->conn->real_escape_string($_POST['name']);
            $description = $this->conn->real_escape_string($_POST['description']);
            $price = $this->conn->real_escape_string($_POST['price']);
            $id = $this->conn->real_escape_string($_POST['id']);
            $vegitarian = $this->conn->real_escape_string($_POST['vegitarian']);
            $nuts = $this->conn->real_escape_string($_POST['nuts']);
            if (!empty($id) && !empty($postData)) {
                $query = "UPDATE food SET name = '$name', description = '$description', price = '$price', vegitarian = '$vegitarian', nuts = '$nuts' WHERE id = '$id'";
                $sql = $this->conn->query($query);
                if ($sql==true) {
                    header("Location:message.php?alert=update_food_succes");
                    // echo 'yur';
                }else{
                    header("Location:message.php?alert=update_food_error");
                    // echo 'nur';
                    // var_dump($query);
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
                header("Location: message.php?alert=update_category_error");

            }
            }

        }

        public function updateRecordCategoriesFoods($postData)
        {
            $name = $this->conn->real_escape_string($_POST['name']);
            $id = $this->conn->real_escape_string($_POST['id']);
            if (!empty($id) && !empty($postData)) {
                $query = "UPDATE categories_food SET name = '$name' WHERE id = '$id'";
                $sql = $this->conn->query($query);
            if ($sql==true) {
                header("Location: message.php?alert=update_category_food_succes");
                // echo 'yur';
            }else{
                header("Location: message.php?alert=update_category_food_error");
                // echo 'nur';

            }
            }

        }


        // Delete drinks data from drinks table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM drinks WHERE id = $id";
            return $this->conn->query($query);
        }

        public function deleteRecordFood($id)
        {
            $query = "DELETE FROM food WHERE id = $id";
            return $this->conn->query($query);
        }

        // Delete drinks data from categories table
        public function deleteRecordCategories($id)
        {
            $query = "DELETE FROM categoriesdrinks WHERE id = '$id'";
            $sql = $this->conn->query($query);
        if ($sql==true) {
            // var_dump($sql);exit;
            header("Location: message.php?alert=delete_category_succes");
        }else{
            header("Location: message.php?alert=delete_category_error");
            }
        }

        public function deleteRecordCategoriesFood($id)
        {
            $query = "DELETE FROM categories_food WHERE id = '$id'";
            $sql = $this->conn->query($query);
        if ($sql==true) {
            // var_dump($sql);exit;
            header("Location: message.php?alert=delete_category_food_succes");
        }else{
            header("Location: message.php?alert=delete_category_food_error");
            }
        }

    }
?>