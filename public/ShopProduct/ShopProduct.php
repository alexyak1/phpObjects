<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 8/4/18
 * Time: 4:50 PM
 */

namespace ShopProduct;


class ShopProduct
{

    private $title;
    private $producerMainName;
    private $producerFirstName;
    private $price;
    private $discount = 0;

    function __construct($title, $fistName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $fistName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducerFirstName() {
        return $this->producerFirstName;
    }

    public function getProducerMainName() {
        return $this->producerMainName;
    }

    public function setDiscount($num) {
        $this->discount = $num;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return ($this->price - $this->discount);
    }

    function getProducer() {
        return "{$this->producerFirstName}" . "{$this->producerMainName}";
    }

    function getSummaryLine() {
        $base = "$this->title ({$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}