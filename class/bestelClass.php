<?php 

class Bestel
{	
	public $data = [
	[
		"currency" => "$46.61",
		"name" => "Burger"
	],
	[
		"currency" => "$4.89",
		"name" => "Cheesebruger"
	],
	[
		"currency" => "$77.06",
		"name" => "counter pounter"
	],
	[
		"currency" => "$45.67",
		"name" => "Big mac"
	],
	[
		"currency" => "$10.95",
		"name" => "Big tasty"
	]
];
	public $html;

	public $total;
	
	function __construct()
	{	
		
		// var_dump($_SESSION["mandje"]);

		if (isset($_SESSION["mandje"])) {
			$this->total();
		}else {
			$_SESSION['mandje'] = array();
		}
	}

	public function show(){
		$this->html = '<div class="container-fluid">';
		$this->html .= '<div class="col-md-12 text-center"><h1>Menu</h1></div>';
		$this->html .= '<div class="col-md-6 offset-md-3">';
		$this->html .= '<div class="row">';

		foreach ($this->data as $key) {
			$this->html .= '<div class="col-md-6">';
			$this->html .= '<form method="POST">';
			$this->html .= '<div class="card mt-5">';
			$this->html .= '<div class="card-header">' . $key["name"]. '</div>';
			$this->html .= '<div class="card-body"><img src="https://some.placeholder/150"></div>';
			$this->html .= '<div class="card-footer">
								<div class="row">
									<div class="col-md-6">' . $key["currency"] . '</div>
									<div class="col-md-6 text-right">
										<button class="btn btn-success" type="submit" name="add">add</button>
									</div>
								</div>
							</div>';
			$this->html .= '<input type="hidden" value="'.$key["name"].'" name="name"></input>';
			$this->html .= '<input type="hidden" value="'.$key["currency"].' " name="currency"></input>';
			$this->html .= '</form></div></div>';
		}
		$this->html .= '</div>';
		$this->html .= '</div>';
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
		print('total: $'.$this->total);
	}


}

 ?>