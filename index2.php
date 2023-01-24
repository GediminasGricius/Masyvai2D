<?php







$students = array(
    array('id' => '1858','name' => 'Gediminas','surname' => 'Gricius'),
);


asort($students);

function palygink($a, $b){
    if ( ($a['name']<=>$b['name']) !=0 ) return $a['name']<=>$b['name'];
    return $a['surname']<=>$b['surname'];

}
usort($students, "palygink");


foreach ($students as $student){
    echo $student["name"]." ".$student["surname"]." <br>";
}







