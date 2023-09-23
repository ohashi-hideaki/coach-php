<?php
require_once('config/status_codes.php');
$random_numbers = array_rand($status_codes, 4);
foreach($random_numbers as $index){
    $options[] = $status_codes[$index];
}
$question = $options[mt_rand(0,3)];
?>


<!DOCTYPE html>
<html lang="ja">
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
            <a href="/" class="header_logo">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="quiz_content">
            <div class="question">
                <p class="question_text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question_text">
                    <?php echo $question['discription'] ?>
                </p>
            </div>
            <form action="result.php" class="quiz_form" method="post">
                 <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
                 <div class="quiz-form_item">
                    <?php foreach($options as $option) : ?>
                    <div class="quiz-form_group">
                          <input type="radio" id="<?php echo $option['code'] ?>" class="quiz-form_radio" name="option" value="<?php echo $option['code'] ?>">
                          <label for="<?php echo $option['code'] ?>" class="quiz-form_label">
                            <?php echo $option['code'] ?>
                          </label>
                    </div>
                    <?php endforeach; ?>
                 </div>
                <div class="quiz-form_button">
                    <button class="quiz-form_button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>