<?php


$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo '<hr>';
echo '<h1>Compare $date with $tar </h1>';

if($date == $tar)
	{
    	echo 'Opps';
	} else if ($date > $tar)
		{
    		echo 'Future';
		}
			else if ($date < $tar)
				{
					echo 'Past';
				}
echo '<hr>';

echo '<h1>Count the number of words in $date</h1>';
echo "Word Count : " . str_word_count($date);

echo '<hr>';
echo '<h1>Return the length of a string and print out the result.</h1>';
echo "String Length : " . strlen($tar);
echo '<hr>';

echo '<h1>ASCII value of the first character of $tar</h1>';
echo "ASCII value of the first character of $tar : " . ord($tar) . "<br>";
echo '<hr>';

echo '<h1>last two characters in $date</h1>';
echo "last two characters in $date : " . substr($date,8) . "<br>";
echo '<hr>';

echo '<h1>Break $date into an array</h1>';
print_r (explode('/',$date));
echo '<hr>';


?>
