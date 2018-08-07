<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 8/4/18
 * Time: 5:20 PM
 */

namespace ShopProduct;


class BookProduct extends ShopProduct
{
    private $numPages = 0;
    private $price;

    public function __construct($title, $fistName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $fistName, $mainName, $price);

        $this->numPages = $numPages;
        $this->price = $price;
    }

    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": {$this->numPages} pages.";
        return $base;
    }

    public function getPrice()
    {
        return $this->price;
    }
}