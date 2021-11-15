<?php

class DrinksMenu {
    public $categories = array(
        "0" => ['White wine'],
        "1" => ['Red wine'],
        "2" => ['Rose wine'],
        "3" => ['Gin & Tonics'],
        '4' => ['Sparkling wine'],
        '5' => ['Cocktails'],
        '6' => ['Aperitif'],
        '7' => ['Non-alcoholic Cocktails'],
        '8' => ['Beers'],
        '9' => ['Liqour'],
        '10' => ['Juices'],
        '11' => ['Sodas'],
        '12' => ['Tequila'],
        '13' => ['Rum'],
        '14' => ['Water'],
        '15' => ['Vodka'],
        '16' => ['Coffee & Tea'],
        '17' => ['Whiskey'],
        '18' => ['Digestives'],
        '19' => ['Dutch Jenever']
    );

    public $drinks = array(
        0 => array (
            'name' => 'Verdejo',
            'price' => 5.50,
            'description' => 'Caballero de Olmedo, Rueda - Spain',
            'category' => 0
        ),
        1 => array (
            'name' => 'Merlot',
            'price' => 5,
            'description' => 'Luck & Jack, Languedoc-Rousillon - France',
            'category' => 1
        ),
        2 => array (
            'name' => 'George rose',
            'price' => 5.50,
            'description' => 'Produit de France, Languedoc, Rousillon',
            'category' => 2
        ),
        3 => array (
            'name' => 'Tanqueray & Fentimans indian tonic',
            'price' => 10.50,
            'description' => 'w/ lemon',
            'category' => 3
        ),
        4 => array (
            'name' => 'Prosecco',
            'price' => 7,
            'description' => 'Belstar, Veneto -Italy',
            'category' => 4
        ),
        5 => array (
            'name' => 'Apeerol spritz',
            'price' => 9.50,
            'description' => 'Aperol, prosecco, eau gazeuse & orange',
            'category' => 5
        ),
        6 => array (
            'name' => 'Pernod',
            'price' => 5.50,
            'description' => '',
            'category' => 6
        ),
        7 => array (
            'name' => 'Virgin Mary',
            'price' => 8.50,
            'description' => 'Spiced tomato jice w/ celery',
            'category' => 7
        ),
        8 => array (
            'name' => 'Heineken',
            'price' => 3,
            'description' => '0.18l/0.25l/0.5l',
            'category' => 8
        ),
        9 => array (
            'name' => 'Baileys',
            'price' => 5,
            'description' => '',
            'category' => 9
        ),
        10 => array (
            'name' => 'Juices',
            'price' => 4.25,
            'description' => 'small/large',
            'category' => 10
        ),
        11 => array (
            'name' => 'Coca Cola',
            'price' => 3.50,
            'description' => 'regular/zero',
            'category' => 11
        ),
        12 => array (
            'name' => 'Jose Cuervo',
            'price' => 5.50,
            'description' => 'blanco',
            'category' => 12
        ),
        13 => array (
            'name' => 'Bacardi',
            'price' => 6,
            'description' => 'superior',
            'category' => 13
        ),
        14 => array (
            'name' => 'Marie-Stella-Maris',
            'price' => 5,
            'description' => 'still/sparkling 0,25l',
            'category' => 14
        ),
        15 => array (
            'name' => 'Ketel one',
            'price' => 6,
            'description' => '',
            'category' => 15
        ),
        16 => array (
            'name' => 'Espresso',
            'price' => 3,
            'description' => '',
            'category' => 16
        ),
        17 => array (
            'name' => 'Jameson',
            'price' => 5.50,
            'description' => 'Irish',
            'category' => 17
        ),
        18 => array (
            'name' => 'Hennesy',
            'price' => 9.50,
            'description' => 'De Cognac',
            'category' => 18
        ),
        19 => array (
            'name' => 'Van Wees',
            'price' => 5,
            'description' => 'young jenever',
            'category' => 19
        ),
        12 => array (
            'name' => 'Sauvignon Blanc',
            'price' => 6,
            'description' => 'Domaine Guillaman, Cotes de Cascogne - France',
            'category' => 0
        ),
    );

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

    public $data3 = [
        [
            "name" => "Fanta",
            "price" => "2",
            "description" => ""
        ],
        [
            "name" => "Cassis",
            "price" => "2",
            "description" => ""
        ],
        [
            "name" => "Sprite",
            "price" => "2,50",
            "description" => ""
        ],
        [
            "name" => "Rivella",
            "price" => "3,50",
            "description" => ""
        ],
        [
            "name" => "Vitamin water",
            "price" => "2",
            "description" => ""
        ],
        [
            "name" => "Fanta-Cassis",
            "price" => "4",
            "description" => ""
        ],
    ];

    public $html;
    function __construct() {
        $this->getCategories();
        $this->getProducts();
        $this->getHtml();
    }

    private function getCategories() {

    }

    private function getProducts() {

    }

    public function getHtml() {

        $formatArray = array();



        $this->html = '<div class="row mt-3">';
        foreach($this->categories as $id => $category) {

            $this->html .='<h2>'. $category['name'] .'</h2>';

            foreach($this->drinks as $id => $drink) {
                array_push($this->categories[$drink["category"]], $drink);
                $this->html .= '<div>';

                $this->html .= '<h6>'. $drink["name"] .'</h6>';
                $this->html .= '<p class="price">€'. $drink["price"] .',-</p>';
                $this->html .= '<p>'. $drink["description"] .'</p>';

                $formatArray[$drink['category']][] = $drink;
                // print($drink['name']);
                // var_dump($drink);
            }
            $this->html .= '</div>';
            $this->html .= '<br>';
        }
        // $this->html .= '</div>';


        // var_dump($this->categories);




        // $this->html = '<div class="row mt-3">';

        // foreach ($this->data as $key) {
        //     $this->html .= '<div class="">';
        //     $this->html .= '<h2>'. $key["category"] .'</h2>';
        //     // $this->html .= '<h4>'. $key["description"] .'</h4>';
        //     $this->html .= '</div';

        //     foreach ($this->data2 as $key2){
        //         $this->html .= '<div>';
        //         $this->html .= '<h6>'. $key2["name"].'</h6>';
        //         $this->html .= '<p class="price">€'. $key2["price"] .',-</p>';
        //         $this->html .= '<p>'. $key2["description"] .'</p>';
        //     }
        //     $this->html .= '</div>';
        // }
    }

    public function show() {
        echo $this->html;
    }
}