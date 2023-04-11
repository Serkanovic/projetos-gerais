<?php

$array = array('fox','bear','deer','cat','dog','elephant','wolf');
$array2 = array('fox', 'bear', 'deer', 'cat', 'dog', 'elephant', 'wolf',
array('blue','red','orange','white','black'));
$array3 = array(12.5,'apple','orange','kiwi','watermelon');
$num = 8;
$text = "lorem ipsum dolor sit";
$columns = "bob|nancy|rachel|molly|victoria";
$bodytag = str_replace("body%","blue","<body text='%body%'");
$vowels = array('a','e','i','o','u','A','E','I,','O','U');
$glued = implode(',',$array);

echo $glued.'<br/>';

$merged_array = array_merge($array,$array3);

//echo $merged_array;

$text_array = explode ( '|', $columns);
print_r($text_array);

echo $bodytag;

echo count($array, COUNT_RECURSIVE). '<br/>';

if(is_array($array)){
	for($i=0;$i<count($array);$i++){
		echo $array[$i]. '<br/>';
	}
}else {
	echo "not an array";
}

$extract = substr($text,3);
echo $extract;

if (in_array(12.5,$array,true)) {
	echo "<br/>the value is found!";
}

echo "<br/>".str_replace($vowels,"",$text);

echo "<br/>".strlen($glued);


?>