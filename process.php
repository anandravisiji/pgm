<!doctype html>
<html>
<head>
<title>Form Processing in PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
<h1>Order Summary</h1>
<?php
echo 'Order Date : ' . Date('r') . '<br><br>';
echo 'Customer Name : ' . $_GET['fullname'] . '<br><br>';
echo 'Ordered Device : ' . $_GET['device'] . '<br><br>';
echo 'Device Color : ' . $_GET['color'] . '<br><br>';
echo 'Accessories : ';

if(!empty($_GET['extras']))
  {
    echo '<ul>';


    foreach ($_GET['extras'] as $acc) {
      echo '<li>' . $acc . '</li>';
    }

    echo '</ul>';
  }

?>
</div>
</body>
</html>