<?php
function cul($a,$b)
{
    return $a + $b;
}

echo cul(2,3) . "<br \>";

function cul2($score1, $score2, $score3)
{
    $sum2 = $score1 + $score2 + $score3;
    if ($sum2 > 210){
        echo "合計点は" . $sum2 . "なので合格です";
    }else{
        echo "合計点は" . $sum2 . "なので不合格です";
    }
}

$result2 = cul2(50, 50, 50);
echo $result2 . "<br \>";

function triangle($width, $height)
{
    $cul3 = $width*$height/2;
    echo "三角形の面積は" . $cul3 . "です";
}

$area = triangle(10, 30);
echo $area . "<br \>";


function square($width2, $height2)
{
    $cul4 = $width2*$height2;
    echo "四角形の面積は" . $cul4 . "です";
}

$area2 = square(10, 30);
echo $area2 . "<br \>";

function trapezoid($upbs, $unbs, $height3)
{
    $cul5 = ($upbs + $unbs) * $height3 / 2;
    echo "台形の面積は" . $cul5 . "です";
}

$area3 = trapezoid(10, 30, 10);
echo $area3;