<?php

// 1 exercise
$A = [];


$value = 100;

while (true) {
    $n = rand(0, 100);
    if (!in_array($n, $A)) {
        $A[] = $n;
        if (count($A) == $value) break;
    }
}

//var_dump($A);
$i = 0;
while ($i <= 10) {
    if (($i % 3) == false) echo $i.PHP_EOL;
    $i++;
}
echo '<br>';

// 2 exercise
echo '<br><br>';
$i = 0;
do {
    if ($i == 0) echo $i . ' - это ноль<br>';
    elseif ($i % 2) echo $i . ' - нечетное число<br>';
    else echo $i . ' - четное число<br>';
    $i++;
}
while ($i <= 10);
echo '<br><br>';
    
// 3 exercise
$array = array(
    'Московская область' => array(
        0 => 'Москва',
        1 => 'Зеленоград',
        2 => 'Клин',
    ),
    'Ленинградская область' => array(
        0 => 'Санкт-Петербург',
        1 => 'Всеволожск',
        2 => 'Павловск',
        3 => 'Киржи',
        4 => 'Житиха',
    ),
    'Смоленская область' => array(
        0 => 'Басманово',
        1 => 'Горки',
        2 => 'Гагарин',
    ),
);

foreach ($array as $key => $value) {
    echo $key.':<br>';
    foreach ($value as $k => $val) {
        if ($val !== end($value)) echo $val.', ';
        else echo $val.'<br>';
    }
};

echo '<br><br>';

// 4 exercise
$letters = array(
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',    
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'y',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'tc',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sch',
    'ь' => '',
    'ы' => 'y',
    'ъ' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',

    'А' => 'A',
    'Б' => 'B',
    'В' => 'V',
    'Г' => 'G',
    'Д' => 'D',
    'Е' => 'E',
    'Ё' => 'Yo',    
    'Ж' => 'Zh',
    'З' => 'Z',
    'И' => 'I',
    'Й' => 'Y',
    'К' => 'K',
    'Л' => 'L',
    'М' => 'M',
    'Н' => 'N',
    'О' => 'O',
    'П' => 'P',
    'Р' => 'R',
    'С' => 'S',
    'Т' => 'T',
    'У' => 'U',
    'Ф' => 'F',
    'Х' => 'H',
    'Ц' => 'Tc',
    'Ч' => 'Ch',
    'Ш' => 'Sh',
    'Щ' => 'Sch',
    'Ь' => '',
    'Ы' => 'Y',
    'Ъ' => '',
    'Э' => 'E',
    'Ю' => 'Yu',
    'Я' => 'Ya',
    ' ' => '_',
);

$string = 'Строка со словами';

function transLetter($string, $letters) {
    mb_strtolower($string);
    foreach ($letters as $key => $value) {
        $string = str_replace($key, $value, $string);
    }
    return $string;
}

echo transLetter($string, $letters);
echo '<br><br>';
echo strtr($string, $letters); // strtr($where, $what); готовая функция для транслитерации строки буквы из массива
echo '<br><br>';

// 5 exercise
function switchSpace($string) {
    $string = str_replace(' ', '_', $string);
    return $string;
}

echo switchSpace($string);
echo '<br><br>';

// 6 exercise
// look MVC

// 7 exercise
for ($i = 0; $i <= 10; print $i++.' ') {}
echo '<br><br>';

// 8 exercise
foreach ($array as $key => $value) {
    echo $key.':<br>';
    foreach ($value as $k => $val) {
            echo $val[0].'<br>';
    }
};

// 9 exercise look 4 exercise
?>

