<?php

class FoodMenu {

    public $html;

    private $dbObj;

    public $categoriesFood;
    public $foods;
    public $categories;

    function __construct(){
        include 'db.php';
        $this->dbObj = new db($dbhost ='localhost', $dbuser = 'root', $dbpass ='', $dbname ='george');
        $this->getCategoriesFood();
        $this->getFood();
        $this->formatArray();
        $this->getHtml();
    }

    private function GetcategoriesFood(){
        $this->dbObj->query("SELECT * FROM categories_food");
        $this->categories = $this->dbObj->fetchAll();
    }

    private function GetFood(){
        $this->dbObj->query("SELECT * FROM food");
        $this->foods = $this->dbObj->fetchAll();
    }

    private function formatArray(){
        $formatArray = array();
        foreach($this->categories as $category) {
            $formatArray[$category['id']] = array(
                'name' => $category['name'],
                'food' => array()
            );
        }

        foreach($this->foods as $food) {
            $formatArray[$food['category_id']]['food'][$food['id']] = array(
                'name' => $food['name'],
                'description' => $food['description'],
                'price' => $food['price'],
                'vegitarian' => $food['vegitarian'],
                'nuts' => $food['nuts'],
            );
        }
        $this->categoriesFood = $formatArray;
    }

    public function getHtml(){
        $html = '<div id="food_overview">';

        foreach ($this->categoriesFood as $id => $category) {
            if(!empty($category['food'])){
                $html .= '<h2 id="'.$id.'">'. $category['name'] .'</h2>';

                foreach($category['food'] as $food) {
                    $html .= '<div class="food">';
                    $html .= '<h4>'. $food["name"].'</h4>';
                    $html .= '<span>'. $food["description"].'</span><br>';
                    $html .= '<span> vegitarian: '. $food["vegitarian"].'</span><br>';
                    $html .= '<span>nuts: '. $food["nuts"].'</span>';
                    $html .= '<p class="price">€'. $food["price"] .',-</p>';
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