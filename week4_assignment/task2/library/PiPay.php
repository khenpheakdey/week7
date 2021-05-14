<?php
require_once("Items.php");
class PiPay extends Items
{
    private static $count = 0;
    public function __construct()
    {
        $this->method = "PiPay";
    }
    public function purchase($Item)
    {
        self::$count++;
    }
    public function getCount()
    {
        $ref = &self::$count;
        return $ref;
    }
}
