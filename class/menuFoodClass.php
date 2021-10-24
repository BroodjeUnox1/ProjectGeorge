<?php

class FoodMenu {
    public $data = [
        [
            "category" => "Eggs",
            "description" => "Poached eggs on brioche"
        ],
        [
            "category" => "Toast",
            "description" => "Sourdough bread"
        ],
        [
            "category" => "Clubs",
            "description" => "W/ french fries"
        ],
        [
            "category" => "Salads",
            "description" => ""
        ],
        [
            "category" => "Starters",
            "description" => ""
        ],
        [
            "category" => "Oysters & clams",
            "description" => "served w/ lemon & red wine -shallot vinaigrette"
        ],
    ];

    public $data2 = [
        [
            "name" => "Florentine w/ spinach & hollandaise sauce",
            "price" => "13",
            "description" => ""
        ],
        [
            "name" => "Norwegian w/ smoked salmon & hollandaise sauce",
            "price" => "16",
            "description" => ""
        ],
        [
            "name" => "Benedict w/ ham & hollandaise sauce",
            "price" => "14",
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
            $this->html .= '<div class="">';
            $this->html .= '<h2>'. $key["category"] .'</h2>';
            $this->html .= '<h4>'. $key["description"] .'</h4>';
            $this->html .= '</div';

            foreach ($this->data2 as $key2){
                $this->html .= '<div>';
                $this->html .= '<h6>'. $key2["name"].'</h6>';
                $this->html .= '<p class="price">€'. $key2["price"] .',-</p>';
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