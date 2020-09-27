<?php
namespace OurApplication\Controller;
class PriceController {
    private static $instance;
    static function getInstance() {
        if ( !self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function showPrice() {
        echo "<br/>Price is 18 taka<br/>";
    }
}