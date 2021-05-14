<?php
require_once("Items.php");
class WING extends Items
{
    private static $count = 0;
    public function __construct()
    {
        $this->method = "Wing";
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
