<?php
require_once('functions/search_city_time.php');
$tokyo = searchCityTime('東京');
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">   
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
     <header class="header">
      <div class="header_inner">
         <a href="/php03/index.php" class="header_logo">
           World Clock
         </a>
      </div>
    </header>
    <main>
        <div class="result_cotent">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card_img-wrapper">
                        <img src="img/<?php echo $tokyo['img']?>" alt="国旗" class="result-card_img">
                    </div>
                    <div class="result-card_body">
                        <p class="result-card_city"><?php echo $tokyo['name']?></p>
                        <p class="result-card_time"><?php echo $tokyo['time']?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card_img-wrapper">
                        <img src="img/<?php echo $comparison['img']?>" alt="国旗" class="result-card_img">
                    </div>
                    <div class="result-card_body">
                        <p class="result-card_city"><?php echo $comparison['name']?></p>
                        <p class="result-card_time"><?php echo $comparison['time']?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>



