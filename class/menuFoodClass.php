<?php

class FoodMenu {
    public $data = [
        [
            "category" => "eggs",
            "description" => "poached eggs on brioche"
        ],
        [
            "category" => "toast",
            "description" => "sourdough bread"
        ],
        [
            "category" => "clubs",
            "description" => "w/ french fries"
        ],
        [
            "category" => "salads",
            "description" => ""
        ],
        [
            "category" => "starters",
            "description" => ""
        ],
        [
            "category" => "oysters & clams",
            "description" => "served w/ lemon & red wine -shallot vinaigrette"
        ],
    ];

    public $data2 = [
        [
            "name" => "florentine w/ spinach & hollandaise sauce",
            "price" => "$13",
            "description" => ""
        ],
        [
            "name" => "norwegian w/ smoked salmon & hollandaise sauce",
            "price" => "$16",
            "description" => ""
        ],
        [
            "name" => "benedict w/ ham & hollandaise sauce",
            "price" => "$14",
            "description" => ""
        ],
    ];

    public $html; 
    public $total;

    function __construct(){
        $this->getHtml();
    }

    public function getHtml(){
        $this->html = '<div class="row mt-3">';

        foreach ($this->data as $key) {
            $this->html .= '<div class=""><h2>'. $key["category"] .'</h2></div>';
            $this->html .= '<div class=""><h4>'. $key["description"] .'</h4></div>';
            
            foreach ($this->data2 as $key2){
                $this->html .= '<div>';
                $this->html .= '<h5>'. $key2["name"].'</h3>';
                $this->html .= '<p>'. $key2["price"] .'</p>';
                $this->html .= '<p>'. $key2["description"] .'</p>';
            }
            $this->html .= '</div>';
            $this->html .= '</div><br>';
        }
    }

    public function show() {
        echo $this->html;
    }
}