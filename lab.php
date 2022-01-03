echo nl2br("hello \n world");


echo hebrev("á çùåï äúùñâ");
echo htmlentities('<a href="https://www.w3schools.com">Go to w3schools.com</a>');
echo strcspn("Hello world!","w");


foreach ($_SERVER as $value){
echo "<br>";
    echo $value;
}


$arr =[45,12,25,10];
echo "sum: " . array_sum($arr) ."<br>";
echo "avg: " .array_sum($arr) /count($arr) . "<br>";
rsort($arr);
print_r($arr);


$strarr = array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");
asort($strarr);
ksort($strarr);
arsort($strarr);
krsort($strarr);
