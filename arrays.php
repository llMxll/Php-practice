<?php
echo'<b>Arrays</b> allow you to save a collection of similar variables to one variable<br>';
echo'use $ArrayName=array(\'element0\',\'element1\',\'etc\')<br>';
echo 'echo can display one element but print_r is required to display all<br>';
echo 'ArrayName[ArryNumToSaveTo]=elment can be used to save or save over more elements to an array<br>';
echo '<br>';

$names=array('Mark','John','Bob');
$names[2]='Marley';
print_r($names);
echo'<br><br>';

echo '<b>Associative arrays</b> allow you to create your own keys - as opposoed to the defult 0,1,2 etc<br>';
echo 'use $ArrayName=array(\'key0\'=>\'=>element0\',\'key1\'=>\'element1\',\'etc\')<br>';
echo '<br>';

$FavColor=array('Mark'=>'Blue','John'=>'Green','Bob'=>'Red');
echo 'the favourite color of Jhon is '.$FavColor['John'].'<br>';
print_r($FavColor);
echo '<br><br>';

echo '<b>Multidimensional arrays</b> are arrays where each key has a number of elements eg.Name key with age and weight elementments<br>';
echo 'Done by puuting arrays within arrays eg. $Staff=array(array(\'Mark\',15,46),array(\'John\',13,65),etc);<br>';
echo 'Entering and spacebaring in before each secondary arry keeps this process neat<br>';
echo 'To display specific elements use the top array with a number of square brackets equal to number of nested arrays eg. $Staff[0][2] will bring up the second element of the first key<br>';
echo '<br>';

$Staff=array(array('Mark',15,46),
             array('John',13,65),
			 array('Bob',14,56));

echo $Staff[1][0].' is '.$Staff[1][1].' years old and wieghs '.$Staff[1][2].'<br>';
print_r($Staff);
echo '<br><br>';

echo 'A Associative array can be used within a Multidimensional array to make displaying the data easier, this will let you recall with names instead of numbers<br>';
echo '<br>';

$StaffTwo=array('Mark'=>array('Name'=>'Mark','Age'=>15,'weight'=>46),
             'John'=>array('Name'=>'John','Age'=>13,'weight'=>65),
			 'Bob'=>array('Name'=>'Bob','Age'=>14,'weight'=>56));
			 
echo $StaffTwo['Mark']['Name'].' is '.$StaffTwo['Mark']['Age'].' years old and wieghs '.$StaffTwo['Mark']['weight'].'<br>';
print_r($StaffTwo);
echo '<br><br>';

?>