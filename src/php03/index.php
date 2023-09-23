<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">   
    <link rel="stylesheet" href="css/index.css">
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
      <div class="search-form_content">
        <div class="search-form_heading">
          <h2>日本と世界時間を比較</h2>
        </div>
        <form class="search-form" action="result.php" method="get">
          <div class="search-form_item">
            <select class="search-form_item-serect" name="city">
              <option value="シドニー">シドニー</option>
              <option value="上海">上海</option>
              <option value="モスクワ">モスクワ</option>
              <option value="ロンドン">ロンドン</option>
              <option value="ヨハネスブルグ">ヨハネスブルグ</option>
              <option value="ニューヨーク">ニューヨーク</option>
            </select>
          </div>
          <div class="search-form_button">
            <button class="search-form_button-submit" type="submit">検索
            </button>
          </div>
        </form>
      </div>
    </main>
</body>
</html>