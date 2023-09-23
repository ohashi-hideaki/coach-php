<?php
require_once('config/status_codes.php');
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
if(!$option){
    header('Location: index.php');
}
foreach($status_codes as $status_code){
    if($status_code['code'] === $answer_code){
        $code = $status_code['code'];
        $discription = $status_code['discription'];
    }
}
$result = $option === $code;
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
    <link rel="stylesheet" href="css/result.css">
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
        <div class="result_content">
            <div class="result">
                <?php if ($result): ?>
                <h2 class="result_text-correct">正解</h2>
                <?php else: ?>
                <h2 class="result_text-incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table_innner">
                    <tr class="answer-table_row">
                        <th class="answer-table_header">ステータスコード</th>
                        <td class="answer-table_text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table_row">
                        <th class="answer-table_header">説明</th>
                        <td class="answer-table_text">
                            <?php echo $discription ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>