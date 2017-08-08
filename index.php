
<?php

//include_once './library/Test.php';
//include_once './library/Table.php';
//include_once './library/Fish.php';
//include_once './library/Aquarium.php';
//$obj1 = new Test();
//$obj->name = 'qwerty';
//$obj->setAge(33);
////var_dump($obj);
//
//$obj->showInfo();
//$obj->setAge(-999);
//$obj->showInfo();

//$obj=new Table();
////=============================
//$obj->setLength(100);
//$obj->setWidth(60);
//$obj->setHeight(90);
//$obj->setColor('white');
//$obj->showInfo();
////============================
//$obj->setLength(120);
//$obj->setColor('red');
//$obj->showInfo();
////=======================
//$obj->setHeight(-50);
//$obj->setColor('broun');
//$obj->showInfo();
//======================
//$obj1 = new Test('vasya',90);
//$obj1->showInfo();
//$copy=clone $obj1;
//$copy->showInfo();
//$copy->setAge(20);
//$copy->showInfo();
//$obj1->showInfo();
//$fish=new Fish('barbus','petya');
//=====================03/08

//$aq=new Aquarium(60);
//echo $aq;
//$fs=new Fish('barbus','nemo');
//$aq->addFish(new Fish('barbus','nemo'));
//$aq->addFish(new Fish('cloun','asd'));
////echo $aq;
//$copy= clone $aq;
////echo $copy;
//$copy->setVolume(50);
//echo $copy;
//$copy->fishes[0]->setName('vasya');
//echo $copy;
//echo $aq;
//====================================================
//include_once './library/Drivers.php';
//include_once './library/Trolleybus.php';
//$dr1=new Drivers('Василь','Пупко', 40, 'ЭТ');
////echo $dr1;
//$tr1=new Trolleybus('1234','2017','150',$dr1);
//echo $tr1.'<br>';
//$tr2=clone $tr1;
////echo $tr2;
//$dr2=new Drivers('Степан', 'Вареник', 41, 'ЭТ');
////echo $dr2;
//$tr2->setDriver($dr2);
////echo $tr2.'<br>';
//$tr2->setNumber('2345');
//echo $tr2.'<br>';
////echo $dr2->getCategory().'<br>';
////$dr1->setAge(17);
////echo $dr1->getAge().'<br>';
////$dr3=new Drivers('Петр', '3', 0, 'ТЭ');
////echo $dr3;
//echo $tr1.'<br>';
//==========================homework=======
include_once './library/Chair.php';
include_once './library/Room.php';
include_once './library/Building.php';
//===========building======================
$building=new Building('ул.Св.Патрика,33');

//==================cairs==================
$ch1= new Chair(50, 50, 50, 'wood');
$ch2=new Chair(60, 60, 80, 'wood');
$ch3=new Chair(50,60,60,'plywood');
//================rooms====================
$room1=new Room(5, 5, 3, '101');
$room2=new Room(5, 6, 3, '102');
$room3=new Room(5, 4, 3, '103');
//===============add chairs to rooms=======
$room1->addChair($ch1);
$room2->addChair($ch2);
$room3->addChair($ch3);
//=============add rooms to building=======
$building->addRoom($room1);
$building->addRoom($room2);
$building->addRoom($room3);
echo 'Building: '.$building;
