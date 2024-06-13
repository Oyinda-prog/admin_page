<?php
echo 'Welcome to <strong>PHP</strong>  Class';
echo '<br>';
echo 24;
$first_name='Oyindamola';
$age=20;
echo $first_name;
echo '<br>';
echo 'My name is '.$first_name.' and my age is '.$age; 
echo '<br>';

$obj=new stdClass;
$obj->firstname='Lola';
$obj->lastname='Dayo';

print_r($obj); echo '<br>';
echo $obj->firstname; 
echo '<br>';



// indexed array, associative array and multidimentional array
$array=[1,2,3,4,5,6];
$array2=array('egg','yam','Orange','Fufu');
// print_r($array);
// print_r($array2);
// echo count($array);

array_push($array,$array2);
// print_r($array);

$array[6][2]='Cassava';
// print_r($array);

$assoc=[
    'age'=>12,
    'address'=>'Oshogbo',
    'email'=>'oyin@gmail.com'
];
print_r($assoc);
// echo ($assoc['address']);

// for ($i=0; $i <count($array2) ; $i++) { 
//     print_r($array2[$i]);
// }

?>


