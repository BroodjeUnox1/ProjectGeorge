<?php

class DrinksMenu {
    public $data = [
        ["category" => "White Wine"],
        ["category" => "Red Wine"],
        ["category" => "Rose Wine"],
        ["category" => "Gin & Tonics"],
        ["category" => "Sparkling Wine"],
        ["category" => "Cocktails"],
        ["category" => "Aperitif"],
        ["category" => "Non-alcoholic Cocktails"],
        ["category" => "Beers"],
        ["category" => "Liqour"],
        ["category" => "Juices"],
        ["category" => "Sodas"],
        ["category" => "Tequila"],
        ["category" => "Rum"],
        ["category" => "Water"],
        ["category" => "Vodka"],
        ["category" => "Coffee & Tea"],
        ["category" => "Whiskey"],
        ["category" => "Digestives"],
        ["category" => "Dutch Jenever"],
    ];

    public $data2 = [
        [
            "name" => "Hennesy",
            "price" => "9,50",
            "description" => "de cognac"
        ],
        [
            "name" => "Van Wees",
            "price" => "5",
            "description" => "young jenever"
        ],
        [
            "name" => "Espresso",
            "price" => "3",
            "description" => ""
        ],
        [
            "name" => "Jameson",
            "price" => "5,50",
            "description" => "Irish"
        ],
        [
            "name" => "Grey Goose",
            "price" => "9",
            "description" => ""
        ],
        [
            "name" => "Bacardi",
            "price" => "6",
            "description" => "superior"
        ],
        [
            "name" => "Marie-Stella-Maris",
            "price" => "3.25",
            "description" => "still/sparkling 0,25l"
        ],
        [
            "name" => "Coca Cola",
            "price" => "3,50",
            "description" => "regular/zero"
        ],

    ];

    public $html;
    function __construct() {
        $this->getHtml();
    }

    public function getHtml() {
        $this->html = '<div class="row mt-3">';

        foreach ($this->data as $key) {
            $this->html .= '<div class="">';
            $this->html .= '<h2>'. $key["category"] .'</h2>';
            // $this->html .= '<h4>'. $key["description"] .'</h4>';
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