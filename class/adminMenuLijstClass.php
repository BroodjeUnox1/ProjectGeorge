<?php

    class MenuLijst {
        public $data = [
            [
                "id" => "000",
                "name" => "Gerechten",
            ],
            [
                "id" => "001",
                "name" => "Nagerechten",
            ],
            [
                "id" => "002",
                "name" => "Dranken",
            ],
            [
                'id' => '003',
                'name' => 'pasta'
            ]
        ];

        public $categories = array(
            0 => 'White wine',
            1 => 'Red wine',
            2 => 'Rose wine',
            3 => 'Gin & Tonics',
            4 => 'Sparkling wine',
            5 => 'Cocktails',
            6 => 'Aperitif',
            7 => 'Non-alcoholic Cocktails',
            8 => 'Beers',
            9 => 'Liqour',
            10 => 'Juices',
            11 => 'Sodas',
            12 => 'Tequila',
            13 => 'Rum',
            14 => 'Water',
            15 => 'Vodka',
            16 => 'Coffee & Tea',
            17 => 'Whiskey',
            18 => 'Digestives',
            19 => 'Dutch Jenever'
        );

        public $drinks = array(
            0 => array (
                'name' => 'Hennesy',
                'price' => 9.50,
                'description' => 'De Cognac',
                'category' => 18
            ),
            1 => array (
                'name' => 'Van Wees',
                'price' => 5,
                'description' => 'young jenever',
                'category' => 19
            ),
            2 => array (
                'name' => 'Verdejo',
                'price' => 5.50,
                'description' => 'Caballero de Olmedo, Rueda - Spain',
                'category' => 0
            ),
            3 => array (
                'name' => 'Merlot',
                'price' => 5,
                'description' => 'Luck & Jack, Languedoc-Rousillon - France',
                'category' => 1
            ),
            4 => array (
                'name' => 'George rose',
                'price' => 5.50,
                'description' => 'Produit de France, Languedoc, Rousillon',
                'category' => 2
            ),
            5 => array (
                'name' => 'Tanqueray & Fentimans indian tonic',
                'price' => 10.50,
                'description' => 'w/ lemon',
                'category' => 3
            ),
            6 => array (
                'name' => 'Prosecco',
                'price' => 7,
                'description' => 'Belstar, Veneto -Italy',
                'category' => 4
            ),
            7 => array (
                'name' => 'Apeerol spritz',
                'price' => 9.50,
                'description' => 'Aperol, prosecco, eau gazeuse & orange',
                'category' => 5
            ),
            8 => array (
                'name' => 'Pernod',
                'price' => 5.50,
                'description' => '',
                'category' => 6
            ),
            9 => array (
                'name' => 'Virgin Mary',
                'price' => 8.50,
                'description' => 'Spiced tomato jice w/ celery',
                'category' => 7
            ),
            10 => array (
                'name' => 'Heineken',
                'price' => 3,
                'description' => '0.18l/0.25l/0.5l',
                'category' => 8
            ),
            11 => array (
                'name' => 'Baileys',
                'price' => 5,
                'description' => '',
                'category' => 9
            ),
            12 => array (
                'name' => 'Juices',
                'price' => 4.25,
                'description' => 'small/large',
                'category' => 10
            ),
            13 => array (
                'name' => 'Coca Cola',
                'price' => 3.50,
                'description' => 'regular/zero',
                'category' => 11
            ),
            14 => array (
                'name' => 'Jose Cuervo',
                'price' => 5.50,
                'description' => 'blanco',
                'category' => 12
            ),
            15 => array (
                'name' => 'Bacardi',
                'price' => 6,
                'description' => 'superior',
                'category' => 13
            ),
            16 => array (
                'name' => 'Marie-Stella-Maris',
                'price' => 5,
                'description' => 'still/sparkling 0,25l',
                'category' => 14
            ),
            17 => array (
                'name' => 'Ketel one',
                'price' => 6,
                'description' => '',
                'category' => 15
            ),
            18 => array (
                'name' => 'Espresso',
                'price' => 3,
                'description' => '',
                'category' => 16
            ),
            19 => array (
                'name' => 'Jameson',
                'price' => 5.50,
                'description' => 'Irish',
                'category' => 17
            ),
        );

        public $html;

        public function __construct(){
            $this->getHtml();
        }

        public function getHtml(){
            $this->html = '<div class="row mt-3">';

            foreach ($this->data as $key) {
                $this->html .= '<div class="col-12 lijstWijzig">';
                $this->html .= '<h3 style="float: left;">' . $key["name"] .'</h3>';
                $this->html .= '<div class="btn-group float-end" role="group" aria-label="Third group">
                                    <a href="./adminMenuLijstView.php?id='. $key["id"] .'">
                                        <button type="button" class="btn btn-dark">Bekijk</button>
                                    </a>
                                    <a href="./adminMenuEditLijst.php?id='. $key["id"] .'">
                                        <button type="button" class="btn btn-dark">Edit</button>
                                    </a>
                                    <a href="">
                                        <button type="button" class="btn btn-dark">Verwijder</button>
                                    </a>
                                </div>';
                $this->html .= '</div>';
            }
            $this->html .= '</div> <br>';
        }

        public function show() {
            echo $this->html;
        }
    }
?>