<?php
$name = htmlspecialchars($_GET['name'],ENT_QUOTES);
$product = htmlspecialchars($_GET['product'],ENT_QUOTES);
$orders = htmlspecialchars($_GET['orders'],ENT_QUOTES);
print "私の名前は、" . $name . "です";
echo '<br>';
print "ご希望の商品は、" . $product . "です";
echo '<br>';
print "注文数は、" . $orders . "です";