<?php
require_once("library/Payment.php");
require_once("library/ABA.php");
require_once("library/WING.php");
require_once("library/PiPay.php");
require_once("library/Items.php");
require_once("PaymentInfo.php");
$item[0] = new Items("Item 1", 5, 1);
$item[1] = new Items("Item 2", 3, 2);
$item[2] = new Items("Item 3", 4, 1);
$item[3] = new Items("Item 4", 5, 1);
$item[4] = new Items("Item 5", 6, 1);
$item[5] = new Items("Item 6", 10, 1);
$item[6] = new Items("Item 7", 15, 1);
$item[7] = new Items("Item 8", 2, 1);

$newPayment = new PaymentInfo();
$newPayment->byABA($item[0]);
$newPayment->byWing($item[1]);
$newPayment->byABA($item[2]);
$newPayment->byABA($item[3]);
$newPayment->byPiPay($item[7]);
$newPayment->byABA($item[5]);
$newPayment->byWing($item[6]);
$newPayment->byWing($item[4]);

$numOfABA = new ABA();;
$numOfPiPay = new PiPay();
$numOfWing = new Wing();

echo "Answer 1: " .  $numOfABA->getCount() . "<br>";
echo "Answer 2: PiPay(" . $numOfPiPay->getCount() . ") + Wing(" . $numOfWing->getCount()  . ") =" . $numOfPiPay->getCount() + $numOfWing->getCount() . "<br>";
echo "Answer 3: " . "<br>";
$newPayment->displayTable();

echo "
<h3> Table: </h3>
            <table>
            <tr >
            <th>Name</th>
            <th>Price</th> 
            <th>Quantity</th>
            <th>Method</th>
            <th>Total</th>
            </tr>";

foreach ($newPayment->sortedRecord() as $value) {
    echo "<tr>
            <td>{$value->getTag()->getItem()}</td>
            <td>{$value->getTag()->getPrice()}</td>
            <td>{$value->getTag()->getQuantity()}</td>
            <td>{$value->getMethod()}</td>
            <td>{$value->getTag()->getTotal()}</td>
            </tr>";
}
