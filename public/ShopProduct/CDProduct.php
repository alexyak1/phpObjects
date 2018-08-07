<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 8/4/18
 * Time: 5:16 PM
 */

namespace ShopProduct;


class CDProduct extends ShopProduct
{
    private $playLength = 0;

    public function __construct($title, $fistName, $mainName, $price, $playLength)
    {
        parent::__construct($title, $fistName, $mainName, $price);

        $this->playLength = $playLength;
    }

    function getPlayLength() {
        return $this->playLength;
    }

    function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": Sound time - {$this->playLength}";

        return $base;
    }
}