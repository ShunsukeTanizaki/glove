<?php require_once('data.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <?php $totalPayment = 0 ?>

    <?php foreach ($types as $type): ?>
      <?php 
        $orderCount = $_POST[$type->getName()]; 
        $type->setOrderCount($orderCount);
        $totalPayment += $type->getTotalPrice() ;
      ?>

      <p class="order-amount">
        <?php echo $type->getName() ?>
        X
        <?php echo $orderCount ?>
        個
      </p>
      <p class="order-price"><?php echo $type->getTotalPrice() ?>円</p>
    <?php endforeach ?>
    <h3>合計金額：<?php echo $totalPayment ?>円</h3>
  </div>
</body>
</html>