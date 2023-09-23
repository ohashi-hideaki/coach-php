<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$mar_set = htmlspecialchars($_POST['mar_set'], ENT_QUOTES);
$number= htmlspecialchars($_POST['number'], ENT_QUOTES);

echo "私の名前は、" . $name . "<br \>";
echo "ご希望の商品は、" . $mar_set . "<br \>";
echo "注文数は、" . $number . "<br \>";


