<?php
require_once("library/Items.php");
require_once("library/Payment.php");
require_once("library/ABA.php");
require_once("library/WING.php");
require_once("library/PiPay.php");
class Method
{
    private $tag;
    private $method;
    public function __construct($Item, $method)
    {
        $this->tag = $Item;
        $this->method = $method;
    }
    public function getTag()
    {
        return $this->tag;
    }
    public function getMethod()
    {
        return $this->method;
    }
}
class PaymentInfo extends Items
{
    private $payByABA;
    private $payByWING;
    private $payByPiPay;
    private $record = [];
    public function __construct()
    {
        $this->payByABA = new ABA();
        $this->payByWING = new WING();
        $this->payByPiPay = new PiPay();
    }
    public function byABA($Item)
    {
        $this->payByABA->purchase($Item);
        ($this->record)[] = new Method($Item, "ABA");
    }
    public function byWING($Item)
    {

        $this->payByWING->purchase($Item);
        ($this->record)[] = new Method($Item, "Wing");
    }
    public function byPiPay($Item)
    {
        $this->payByPiPay->purchase($Item);
        ($this->record)[] = new Method($Item, "PiPay");
    }
    public function getRecord()
    {
        return $this->record;
    }
    public function sortedRecord()
    {
        $sortedRecord = $this->record;
        usort($sortedRecord, fn ($a, $b) => $a->getTag()->getTotal() < $b->getTag()->getTotal() ? 1 : -1);
        return $sortedRecord;
    }
    public function displayTable()
    {
        echo "
            <table>
            <tr >
            <th>Name</th>
            <th>Price</th> 
            <th>Quantity</th>
            <th>Method</th>
            <th>Total</th>
            </tr>";
        foreach ($this->record as $value) {
            echo "<tr>
            <td>{$value->getTag()->getItem()}</td>
            <td>{$value->getTag()->getPrice()}</td>
            <td>{$value->getTag()->getQuantity()}</td>
            <td>{$value->getMethod()}</td>
            <td>{$value->getTag()->getTotal()}</td>
            </tr>";
        }
    }
}
