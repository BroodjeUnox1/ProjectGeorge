


 <?php 

	class Bestel
	{	
		public $data = [
		[
			"currency" => "€9.89",
			"name" => "Burger",
			"omschrijving" => "A nice standard burger",
			"placeholder" => "https://www.indeomgeving.nl/wp-content/uploads/2016/02/MG_4575-150x150.jpg"
		],
		[
			"currency" => "€12.30",
			"name" => "Salmon deluxe",
			"omschrijving" => "Salmon with some delicous vegies",
			"placeholder" => "https://www.timetomomo.com/wp-content/uploads/2020/03/BeeldVoorBlogArnhem-150x150.jpg"

		],
		[
			"currency" => "€15.00",
			"name" => "Macaroni",
			"omschrijving" => "Macarone with special made tomato sauce",
			"placeholder" => "https://www.foodiesmagazine.nl/app/uploads/2019/10/RIGATONI_OLIVE_18041720142-150x150.jpg"
		],
		[
			"currency" => "€18.95",
			"name" => "Premium salad",
			"omschrijving" => "Salad with all kinds of vegies and cheese"
,			"placeholder" => "https://www.orthica.nl/wp/wp-content/uploads/2018/01/werkprestaties-gezond-eten-1-150x150.jpg"
		],
		[
			"currency" => "€10.95",
			"name" => "Big tasty",
			"omschrijving" => "Taste explosion with unions",
			"placeholder" => "https://usercontent.one/wp/www.etenvanplien.nl/wp-content/uploads/2020/05/DSC_2471-2-150x150.jpg"
		]
	];
		public $html;

		public $total;
		
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
		}

		public function show(){
				$this->html = '<div class="container mt-5">';
			
				foreach ($this->data as $key) {
					$this->html .= '<div class="menuCard row">';
					$this->html .= '<div class="col-5 col-xs-7 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-xxl-2">';
					// $this->html .= '<form method="POST">';
					$this->html .= '<img class="" id="testImage" src="'.$key["placeholder"].'" alt="...">';
					$this->html .= '</div>';
					$this->html .= '<div class="col-7 col-xs-5 col-sm-8 col-md-9 col-lg-9 col-xl-10 col-xxl-10 nameOmschrijving">
										<h3>'. $key["name"] .'</h3>
										<p>'. $key["omschrijving"] .'</p>
									</div>';
					$this->html .= '<div class="col-4 col-xs-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-xxl-1 button">
										<p><strong>'. $key["currency"] .'</strong></p>
										<select class="form-control" id="item'.array_search($key, $this->data).'">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										</select>
										<button class="btn btn-secondary btn-block" name="add" onclick="add(`'.$key["name"]. '`, `'.$key["currency"].'`,`item'.array_search($key, $this->data).'`)">+</button>
									</div>';
									// $this->html .= '<div class="" style="float: right;">' . $key["name"]. '</div>';
									// </form>
					$this->html .= '</div>';
				}
				
				$this->html .= '</div> <br>'; 
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
				document.getElementById("total").innerHTML = "Total: €'.$this->total.'"
            </script>';
		}
	}
	

?>