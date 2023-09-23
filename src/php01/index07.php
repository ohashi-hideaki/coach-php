<?php
$people = 
[
    ['Taro', '25歳', 'men'],
    ['Jiro', '20歳', 'men'],
    ['hanako', '16歳', 'women']
];

foreach ($people as $info){
    echo $info[0] . '(' . $info[1] . $info[2] . ')' . '<br \>';
}
