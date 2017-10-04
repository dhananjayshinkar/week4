<?php

$obj = new main();


class main
{

	private $htmlelement; 

	public function __construct()
	{

		$date =  date('Y-m-d', time());
		echo "The value of \$date: ".$date."<br>";

		$tar = "2017/05/24";		
		echo "The value of \$tar: ".$tar."<br>";

		$year = array("2012", "396", "300","2000", "1100", "1089");
		echo "The value of \$year: ";
		print_r($year);
		
		echo htmlElements::horizontalRule();
        
		echo htmlElements::headerOne("Replace - with / in $date ");
		echo htmlElements::headerFour("New Format : ");
		echo stringDemo::stringReplace('-','/',$date);
		echo htmlElements::horizontalRule();
        
		echo htmlElements::headerOne('Compare $date with $tar');
		echo stringDemo::stringCompare($date,$tar);
		echo htmlElements::horizontalRule();
        
		echo htmlElements::headerOne("Count the number of words in $date");
		echo stringDemo::stringWordcount($date);
		echo htmlElements::horizontalRule();
        
		echo htmlElements::headerOne('Return the length of a string and print out the result');
		echo stringDemo::stringLength($date);
		echo htmlElements::horizontalRule();
        
		echo htmlElements::headerOne('ASCII value of the first character of $tar');
		echo stringDemo::stringASCIIValue('2');
		echo htmlElements::horizontalRule();
        
		echo htmlElements::headerOne("last two characters in $date : ");
		echo stringDemo::stringCharacter($date,8);
		echo htmlElements::horizontalRule();
        
		echo htmlElements::headerOne("String into Array Example:");
		echo stringDemo::stringExplode($tar);
		echo htmlElements::horizontalRule();
		
		echo htmlElements::headerOne("Leap Year using Foreach loop:");
		echo stringDemo::leapYearForeach($year);
		echo htmlElements::horizontalRule();
		
		echo htmlElements::headerOne("Leap Year using For loop:");
		echo stringDemo::leapYearForLoop($year);
		echo htmlElements::horizontalRule();
			

	}
 	
 public function __destruct() 
 	{
 		print($this->htmlelement);
	 	
 	}
}


class htmlElements
{
  static public function horizontalRule() 
  {
      return '<hr>';
    }
    static public function headerOne($text) 
    {
      return '<h1>' . $text . '</h1>';
  }
    static public function headerFour($text)
    {
      return '<h4>' .$text . '</h4>';
    }
    
}




class stringDemo
{

	 static public function stringReplace($src,$target,$str)
	 {
	 	return str_replace($src,$target,$str);
	 }

	 static public function stringCompare($date1,$tar1)
	 {
	 	if($date1==$tar1)
	 	{
	 		echo "Oops";
	 	}
	 		else if($date1>$tar1)
	 		{
	 			return "Future";
	 		}
	 			else if($date1<$tar1)
	 			{
	 				return "Past";
	 			}
	 }

	 static public function stringWordcount($string1)
	 {
	 	return str_word_count($string1);
	 }

	 static public function stringLength($string1)
	 {
	 	return strlen($string1);
	 }

	 static public function stringASCIIValue($string1)
	 {
	 	return ord($string1);
	 }

	 static public function stringCharacter($string1,$value)
	 {
	 	return substr($string1,$value);
	 }

	 static public function stringExplode($string1)
	 {
	 	print_r(explode('/',$string1));
	 }
	
	 static public function leapYearForeach($year1)
	 {
	 	foreach ($year1 as $array1)
	 	{
	 		$value=( (($array1 % 4) == 0) && ((($array1 % 100) != 0) || (($array1 % 400)==0)) );
			
			switch ($value) 
			{			
				case '1':
					echo "Year : " . $array1 . " True  ";
					break;
				default:
					echo "Year : " . $array1 . " False  ";
				break;
			}
	 	}
	 }
	 
	 Static public function leapYearForLoop($year1)
	 {
		for($i = 0; $i < count($year1); $i++) 
		{
			$value=( (($year1[$i] % 4) == 0) && ((($year1[$i] % 100) != 0) || (($year1[$i] % 400)==0)) );
			switch ($value) 
			{
				case '1':
					echo "Year : " . $year1[$i] . " True  ";
					break;
				
				default:
					echo "Year : " . $year1[$i] . " False  ";
					break;
			}
		}
	 }

	 
}



/*echo '<hr>';
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


*/
?>
