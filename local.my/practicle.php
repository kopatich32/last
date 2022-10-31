<?php
//function number($n, $titles) {
//    $cases = array(2, 0, 1, 1, 1, 2);
//    return $titles[($n % 100 > 4 && $n % 100 < 20) ? 2 : $cases[min($n % 10, 5)]];
//}
//echo number(10, array('яблоко', 'яблока', 'яблок'));


class grandpa {
    public $hairs = 'white';
    public $body = 'ordinary';
    //protected $eye = 'Глаза';
    private $eye = 'Глаза';
    public function eat ($calories){
        if ($calories < 2000){
            $this->body = 'fat';
        }else{
            $this->body = 'thin';
        }

    }
    protected function showEye (){
        return $this->eye;
    }
}
class father extends  grandpa{
//    public function showEye (){
//       $eye =  parent::showEye();
//       $eye .=' beautifull';
//       return $eye;
//    }
protected $hair = 'pink';
public function  recolor($color){
$this -> hair = $color;
echo $this-> hair;
}

}


$Petya = new father();
$Vasya = new father();



//echo ('Petya has ' . $Petya->hairs . ' hairs color' . '<br>');
//echo ('Vasya has ' . $Vasya->body . ' body' . '<br>');
//$Vasya->hairs = 'black';
//echo ('Petya has ' . $Vasya->hairs . ' hairs color' . '<br>');
//echo 'Vasya has ' . $Vasya->body . ' body' . '<br>';
//$Petya-> eat(1500);
//$Vasya-> eat(2500);
//echo 'Petya has ' . $Petya->body . ' body' . '<br>';
//echo 'Vasya has ' . $Vasya->body . ' body' . '<br>';

//echo $Petya->showEye() . ' и бльшие';
//echo $Petya ->hair;
$Petya->recolor('景色') ;
$color = 'зелёное';
$fruit = 'яблоко';
