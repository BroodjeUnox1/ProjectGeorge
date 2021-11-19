 <?php 

 include "db.php";

	class Bestel
	{	
		public $html;

		public $total;

		public $database;

		public $dataFromDB;

		public $basket;

		public $dataForDB;
		
		function __construct()
		{	
			
			// var_dump($_SESSION["mandje"]);
			// unset($_SESSION["mandje"]);	
			// var_dump(array_values($_SESSION["mandje"]));

			if (isset($_SESSION["mandje"])) {
				// $this->total();
			}else {
				$_SESSION['mandje'] = array();
			}

			$this->database = new db();
		}

		public function show(){
			$this->dataFromDB = $this->database->query("select * from Menu")->fetchAll();
				$this->html = '<div class="container mt-5">';
			
				foreach ($this->dataFromDB as $key) {
					$this->html .= '<div class="row">
					<div class="col-md-8 col-sm-8 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-lg-3 col-sm-4 col-4">
                        <img class="" id="testImage" src="'.$key["img"].'" alt="..." >
                    </div>
                    <div class="col-md-8 col-lg-3 col-sm-8 col-8">
                        <div class="row my-auto">
                            <div class="col-md-12"><small>'. $key["name"] .'</small></div>
                            <div class="col-md-12"><h6 class="about_text">'. $key["caption"] .'</h6></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-auto col-sm-12">
                <div class="row mt-sm-3">
                    <div class="col-md-4 col-sm-2 col-2"><p>'. $key["price"] .',-</p></div>
                    <div class="col-md-4 col-sm-4 col-4">
                        <select class="form-control" id="item'.array_search($key, $this->dataFromDB).'">
                            <optgroup label="Amount">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-4">
                        <button class="hoverButton" style="border-radius: 7px; padding: 0.3rem 1rem; background-color: transparent;" name="add" onclick="add(`'.$key["name"]. '`, `'.$key["price"].'`,`item'.array_search($key, $this->dataFromDB).'`)">+</button>
                    </div>
                </div>
            </div>
        </div> 
        <hr>';
    }

				print($this->html);
		}
		
		public function add($name, $currency, $amount) {
			// data from POST
			$data = ["name" => $name,"currency" => $currency, "amount" => $amount];
			// check if item doesnt exist already
			foreach ($_SESSION["mandje"] as $key => $value) {
				// if its exist update amount values
				if ($value["name"] == $data["name"]) {
					$data["amount"] += $value["amount"];
					$_SESSION["mandje"][$key] = $data;
					// calculate total
					$this->total();
					// stop the loop other wise it wil push the item 
					exit();
				}
			}
			array_push($_SESSION["mandje"], $data);

		}

		public function total() {
			foreach ($_SESSION['mandje'] as $key) {
				$this->total += (float)str_replace("€", '', $key["currency"]) * $key["amount"];
			}

			print '<script type="text/javascript">
				document.getElementById("total").innerHTML = "Total: €'.number_format($this->total, 2).'"
            </script>';
		}

		public function pay($firstname, $lastname, $phone, $email, $street, $postal, $time){
			// make the total
			foreach ($_SESSION['mandje'] as $key) {
				$this->total += (float)str_replace("€", '', $key["currency"]) * $key["amount"];
			}
			// transfers the session data into json
			$this->basket = json_encode($_SESSION["mandje"]);
			// make new db
			$this->database = new db();
			foreach($_POST as $value){
				if(empty($value)){
					print("Failed something empty");
					exit;
				}else {
					$this->confirm = true;
				}
			}
			if($this->confirm){
				// insert into orders with all data
				$this->dataForDB = $this->database->query('INSERT INTO orders (firstname,lastname,phone,email,street,postal,timedeliver,itemlist,total)values(?,?,?,?,?,?,?,?,?)', $firstname, $lastname, (int)$phone, $email, $street, $postal, $time, $this->basket, $this->total);
				// unset session so he cant pay twice for the same meal
				unset($_SESSION["mandje"]);
				print("Success");
			}
		}


	}

		
	

?>