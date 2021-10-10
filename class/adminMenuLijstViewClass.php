<?php
    class ViewLijst {
        public $data = [
            [
                "id" => "001",
                "currency" => "$46.61",
                "name" => "Burger",
                "img" => "https://www.karlijnskitchen.com/wp-content/uploads/2015/09/cheese-bacon-burger-1-e1473968135128-150x150.jpg",
                "omschrijving" => "allerlekkerste burger"
            ],
            [
                "id" => "002",
                "currency" => "$4.89",
                "name" => "Cheesebruger",
                "img" => "https://www.karlijnskitchen.com/wp-content/uploads/2015/09/cheese-bacon-burger-1-e1473968135128-150x150.jpg",
                "omschrijving" => "allerlekkerste cheeseburger"
    
            ],
            [
                "id" => "003",
                "currency" => "$77.06",
                "name" => "counter pounter",
                "img" => "https://www.karlijnskitchen.com/wp-content/uploads/2015/09/cheese-bacon-burger-1-e1473968135128-150x150.jpg",
                "omschrijving" => "allerlekkerste counter pounter"
            ],
            [
                "id" => "004",
                "currency" => "$45.67",
                "name" => "Big mac",
                "img" => "https://www.karlijnskitchen.com/wp-content/uploads/2015/09/cheese-bacon-burger-1-e1473968135128-150x150.jpg",
                "omschrijving" => "allerlekkerste big mac"
            ],
            [
                "id" => "005",
                "currency" => "$10.95",
                "name" => "Big tasty",
                "img" => "https://www.karlijnskitchen.com/wp-content/uploads/2015/09/cheese-bacon-burger-1-e1473968135128-150x150.jpg",
                "omschrijving" => "allerlekkerste big tasty"
            ]
        ];

        public $html;
        
        public function __construct(){
            $this->getHtml();
        }

        public function getHtml(){
            $this->html = '<tr>';

            foreach ($this->data as $key) {
                $this->html .= '<th scope="row">' .$key["id"] .'</th>';
                $this->html .= '<td>' .$key["name"] .'</td>';
                $this->html .= '<td>' .$key["omschrijving"] .'</td>';
                $this->html .= '<td>' .$key["currency"] .'</td>';
                $this->html .= '<td>
                                    <a href="#delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                        </svg>
                                    </a>
                                </td>';
                $this->html .= '<td>
                                    <a href="./adminMenuEditGerecht.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square"
                                            viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                </td>';
                $this->html .= '</tr> <br>';
            }
        }

        public function show() {
            echo $this->html;
        }
    }
?>