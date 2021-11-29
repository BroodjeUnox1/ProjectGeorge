<?php

    class MenuLijst {

        public $html;

        public function __construct(){
            $this->getHtml();
        }

        public function getHtml(){
            $this->html = '<div class="row mt-3">';

            foreach ($this->categories as $key) {
                $this->html .= '<div class="col-12 lijstWijzig">';
                $this->html .= '<h3 style="float: left;">' . $key['0'] .'</h3>';
                $this->html .= '<div class="btn-group float-end" role="group" aria-label="Third group">
                                    <a href="./adminMenuLijstView.php">
                                        <button type="button" class="btn btn-dark">Bekijk</button>
                                    </a>
                                    <a href="./adminMenuEditLijst.php">
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