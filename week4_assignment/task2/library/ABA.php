<?php
require_once("Items.php");
class ABA extends Items
{
    private static $count = 0;
    public function __construct()
    {
        $this->method = "ABA";
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
