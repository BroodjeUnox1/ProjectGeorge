<?php

    class DrinksMenu {

        public $html;

        private $dbObj;

        public $categories;
        public $drinks;
        public $categoryDrinks;

        function __construct() {
            include 'db.php';
            $this->dbObj = new db($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'george');
            $this->getCategories();
            $this->getProducts();

            $this->formatArray();

            $this->getHtml();
        }

        private function getCategories() {
            $this->dbObj->query('SELECT * FROM categoriesDrinks');
            $this->categories = $this->dbObj->fetchAll();
        }

        private function getProducts() {
            $this->dbObj->query('SELECT * FROM drinks');
            $this->drinks = $this->dbObj->fetchAll();
        }

        private function formatArray() {
            $formatArray = array();
            foreach($this->categories as $category) {
                $formatArray[$category['id']] = array(
                    'name' => $category['name'],
                    'drinks' => array()
                );
            }

            foreach($this->drinks as $drink) {
                $formatArray[$drink['category_id']]['drinks'][$drink['id']] = array(
                    'name' => $drink['name'],
                    'description' => $drink['description'],
                    'price' => $drink['price']
                );
            }
            $this->categoryDrinks = $formatArray;
        }

        public function getHtml() {
            $html = '<div id="drink_overview">';

            foreach ($this->categoryDrinks as $id => $category) {
                if (!empty($category['drinks'])) {
                    $html .= '<h2 id="'.$id.'">'.$category['name'].'</h2>';

                    foreach($category['drinks'] as $drink) {
                        $html .= '<div class="drink">';
                        $html .= '<h4>'.$drink['name'].'</h4>';
                        $html .= '<span class="price"> €'.$drink['price'].',-</span>';
                        $html .= '<span class="description">'.$drink['description'].'</span>';
                        $html .= '</div>';
                        $html .= '<br>';
                    }
                }
            }

            $this->html = $html;
        }

        public function show() {
            echo $this->html;
        }
    }