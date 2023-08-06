<?php
//Things I have learned
echo '<b><u>Conditionals</u></b><br><br>';

echo'<b>Compartive operators</b><br>';
echo '== means values equal<br>'; 
echo '=== means values and type are equal<br>'; 
echo '!= means NOT equal values<br>'; 
echo '<> means NOT equal values<br>'; 
echo '!== means NOT identical value or type <br>'; 
echo '< means less than<br>'; 
echo '> means greater than<br>'; 
echo '<= means less than or equal to<br>'; 
echo '>= means greater than or equal to<br>'; 
echo '<br>';

echo'<b>Logical operators</b><br>';
echo 'and means true if both statements are true<br>'; 
echo '&& also means true if both statements true<br>'; 
echo 'or means true if either statement true<br>'; 
echo '|| also means true if either statement true<br>';
echo 'Xor means if only one of 2 statements are true<br>'; 
echo '! means true if the statement is not true<br>';
echo '<br>';   

echo '<b> Code for if else statements </b><br>';
echo 'if () <br> { <br> } <br> else <br> { <br> } <br><br>';
echo 'else can be swapped out to else if() for nested if conditions<br>';
echo '<br>';

echo '<b>Loops</b><br>';
echo 'may require a counter to do things x times, this looks like $counter=1<br>';
echo 'while()<br>(<br>repeated code here<br>$counter++<br>)<br>';
echo 'note while(1) is always true and will repeat . Similarly while(0) is always false and will not trigger.<br>';
echo '<br>';

$counter=1;
While($counter<=12)
{
	echo $counter.', ';
	$counter++;
}
echo'<br><br>';

echo '<b>Do while loops</b><br>';
echo 'The same as loops but code is executed once before first condition check<br>';
echo 'do<br>{<br>code here<br>$counter++<br>}<br>while()<br>';
echo '<br>';

echo '<b>For loops</b><br>';
echo 'The same as loops but counter is included in format<br>';
echo 'for(init; condition; increment)<br>{<br>code here<br>$counter++<br>}<br>';
echo '<br>';
echo 'for example<br>for($counter=1; $counter<=10; $counter++)<br>{<br>echo $counter.', ';<br>$counter++;<br>}<br>';
echo '<br>';

for($counter=1; $counter<=10; $counter++)
{
	echo $counter.', ';
	$counter++;
}
echo'<br><br>';

echo '<b>For Each loops</b><br>';
echo 'Runs code for each element in an <a href="arrays.php">array</a>.<br>';
echo 'foreach(arrayname as elementname)<br>{<br>code here><br>}<br>';
echo '<br>';

echo 'For nested arrays, nested foreach loops can be used to run code for each elemen<br>';
echo 'For example<br>';
echo 'People=array(\'Mark\'=>array(\'Name\'=>\'Mark\',\'Age\'=>15,\'weight\'=>46),<br>
             \'John\'=>array(\'Name\'=>\'John\',\'Age\'=>13,\'weight\'=>65),<br>
			 \'Bob\'=>array(\'Name\'=>\'Bob\',\'Age\'=>14,\'weight\'=>56));<br>';
echo 'foreach($People as $person=>$innerarrayname)<br>';
echo '{<br>echo \'< b>\'.$person.\'< /b>< br>\';<br>';
echo 'foreach($innerarrayname as $element)<br>';
echo'<br><br>';

echo '<b>Switches</b><br>';
echo 'used to consider a variable for multiple conditions<br>';

?>