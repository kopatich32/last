<?php

$firstName = "Денис";

$str = 'Denis';

$lastName = "Lvdgvddad";

$fullName = 'My name is ' . $firstName . ' ' . $lastName;

$dir = `dir`;

//$str = <<<HEREDOC
//hello world
//asdjfhakljshf
//asdkjfl;ajsf
//al;;dskfjp;aosjk
//adfgkjhalkdshjalkj $fullName
//$lastName
//HEREDOC;

$addressStr = 'https://ya.ru/search/lalala/';
$len = mb_strlen($firstName);

$char = mb_substr($firstName, 0, 1);

//$newStr = str_replace('Д', 'X', $firstName);
$newStr = preg_replace('/[А-Я]/u', 'X', $firstName);

$arr = explode('/', $addressStr);

$arrNew = preg_split('//', $addressStr, 10, PREG_SPLIT_NO_EMPTY);

$newStr1 = implode('/', $arrNew);

$newStr1 = mb_strtoupper($firstName);

//die($len . '');
//exit($len . '');

error_reporting(E_ALL);

echo $len;

var_dump($len);

print_r($len);

print ($fullName);

$c = 1;

$i = 1;

$i += $i++ + ++$i;

//$num = 100 / 0;

$arr = [1,2,3,4];

$arr1 = [
    //'nul' => 1,
    'first' => [
        [1,2,0]
    ],
    'first1' => [
        777,
        [1,2,3,0,5],
    ],
    //'second' => 3
];

//$a = $arr1['second'];

for($i = 0; $i < count($arr); $i++){

    //echo $arr[$i] . '<br>';

}

echo '<br>';

foreach ($arr1 as $key => $item){

    foreach ($item as $value){

        if(is_array($value)) {

            foreach ($value as $v){

                if(!$v){

                    continue 3;

                }

                echo $v . '<br>';

            }

        }else{

            echo $value . '<br>';

        }

    }

}

$a = 1;

if($a > 1){


}elseif ($a = 1){


}else{



}

switch ($a){

    case 2:
        //code
        break;

    case 1:
        //code
        break;

    default:
        //code

}

function sum(int $a, int $b) : int{

    return $a + $b;

}

$c = sum(5,5);

$res = echoArr([2,3,4,'455']);

function echoArr(array $arr){

    $sum = 0;

    foreach ($arr as $item){

        if(is_int($item) && !($item % 2)){

            $sum += $item;

        }

    }

    return $sum;

}

$func = function(){

    echo 'ПРИВЕТ';

};

$func();

$a = 1;

//include 'h.html';

$arr = array(1,2,3,4.5,);

//$newArr = require_once 'test1.php';
//$newArr1 = require_once 'test1.php';

$aa =1;
