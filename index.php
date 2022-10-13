<?php
echo "Hello world";
$arrWords = [];
$arrWords2 = [];

foreach ($arrWords as $key => $val) {
    echo 'ddd';
}

function searchWord($arrWords, $arrWords2)
{
    array_merge($arrWords, $arrWords2);
    for ($i = 0; $i < 10; $i++) {
        echo 'ddd';
    }
}
