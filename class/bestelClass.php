
<<<<<<< HEAD


 <?php 

=======
>>>>>>> f88d5407dcec983d7b8307be9b0aa086fe580782
	class Bestel
	{	
		public $data = [
		[
<<<<<<< HEAD
			"currency" => "€46.61",
=======
			"currency" => "$46.61",
>>>>>>> f88d5407dcec983d7b8307be9b0aa086fe580782
			"name" => "Burger",
			"omschrijving" => "allerlekkerste burger"
		],
		[
<<<<<<< HEAD
			"currency" => "€4.89",
=======
			"currency" => "$4.89",
>>>>>>> f88d5407dcec983d7b8307be9b0aa086fe580782
			"name" => "Cheesebruger",
			"omschrijving" => "allerlekkerste cheeseburger"

		],
		[
<<<<<<< HEAD
			"currency" => "€77.06",
=======
			"currency" => "$77.06",
>>>>>>> f88d5407dcec983d7b8307be9b0aa086fe580782
			"name" => "counter pounter",
			"omschrijving" => "allerlekkerste counter pounter"
		],
		[
<<<<<<< HEAD
			"currency" => "€45.67",
=======
			"currency" => "$45.67",
>>>>>>> f88d5407dcec983d7b8307be9b0aa086fe580782
			"name" => "Big mac",
			"omschrijving" => "allerlekkerste big mac"
		],
		[
<<<<<<< HEAD
			"currency" => "€10.95",
=======
			"currency" => "$10.95",
>>>>>>> f88d5407dcec983d7b8307be9b0aa086fe580782
			"name" => "Big tasty",
			"omschrijving" => "allerlekkerste big tasty"
		]
	];
		public $html;

		public $total;
		
		function __construct()
		{	
			
			// var_dump($_SESSION["mandje"]);
<<<<<<< HEAD
			// unset($_SESSION["mandje"]);	
			// var_dump(array_values($_SESSION["mandje"]));

			if (isset($_SESSION["mandje"])) {
				// $this->total();
=======

			if (isset($_SESSION["mandje"])) {
				$this->total();
>>>>>>> f88d5407dcec983d7b8307be9b0aa086fe580782
			}else {
				$_SESSION['mandje'] = array();
			}
		}
<<<<<<< HEAD

		public function show(){
				$this->html = '<div class="container mt-5">';
			
				foreach ($this->data as $key) {
					$this->html .= '<div class="menuCard row">';
					$this->html .= '<div class="col-5 col-xs-7 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-xxl-2">';
					// $this->html .= '<form method="POST">';
					$this->html .= '<img class="" id="testImage" src="https://www.karlijnskitchen.com/wp-content/uploads/2015/09/cheese-bacon-burger-1-e1473968135128-150x150.jpg" alt="...">';
					$this->html .= '</div>';
					$this->html .= '<div class="col-7 col-xs-5 col-sm-8 col-md-9 col-lg-9 col-xl-10 col-xxl-10 nameOmschrijving">
										<h3>'. $key["name"] .'</h3>
										<p>'. $key["omschrijving"] .'</p>
									</div>';
					$this->html .= '<div class="col-4 col-xs-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-xxl-1 button">
										<p><strong>'. $key["currency"] .'</strong></p>
										<button class="btn btn-secondary btn-block" name="add" onclick="add(`'.$key["name"]. '`, `'.$key["currency"].'`,`item'.array_search($key, $this->data).'`)">+</button>
									</div>';
									// $this->html .= '<div class="" style="float: right;">' . $key["name"]. '</div>';
									// </form>
					$this->html .= '</div>';
				}
				
				$this->html .= '</div> <br>'; 
				print($this->html);
		}
		

		public function add($name, $currency) {
			$data = ["name" => $name,"currency" => $currency];
			array_push($_SESSION['mandje'], $data);	
		}
		

		public function total() {
			foreach ($_SESSION['mandje'] as $key) {
				$this->total += (float)str_replace("€", '', $key["currency"]);
			}

			print '<script type="text/javascript">
				document.getElementById("total").innerHTML = "Total: €'.$this->total.'"
            </script>';
=======

		public function show(){
				$this->html = '<div class="container mt-5">';
			
				foreach ($this->data as $key) {
					$this->html .= '<div class="menuCard row">';
					$this->html .= '<div class="col-5 col-xs-7 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-xxl-2">';
					// $this->html .= '<form method="POST">';
					$this->html .= '<img class="" id="testImage" src="https://www.karlijnskitchen.com/wp-content/uploads/2015/09/cheese-bacon-burger-1-e1473968135128-150x150.jpg" alt="...">';
					$this->html .= '</div>';
					$this->html .= '<div class="col-7 col-xs-5 col-sm-8 col-md-9 col-lg-9 col-xl-10 col-xxl-10 nameOmschrijving">
										<h3>'. $key["name"] .'</h3>
										<p>'. $key["omschrijving"] .'</p>
									</div>';
					$this->html .= '<div class="col-4 col-xs-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-xxl-1 button">
										<p><strong>'. $key["currency"] .'</strong></p>
										<button type="button" class="btn btn-secondary btn-block">+</button>
									</div>';
									// $this->html .= '<div class="" style="float: right;">' . $key["name"]. '</div>';
									// </form>
					$this->html .= '</div>';
				}
				
				$this->html .= '</div> <br>'; 
				print($this->html);
		}
		

		public function add($name, $currency) {
			$data = ["name" => $name,"currency" => $currency];
			array_push($_SESSION['mandje'], $data);	
		}
		

		public function total() {
			foreach ($_SESSION['mandje'] as $key) {
				$this->total += (float)str_replace("$", '', $key["currency"]);
			}
			print('total: $' .$this->total);
>>>>>>> f88d5407dcec983d7b8307be9b0aa086fe580782
		}
	}
	

?>