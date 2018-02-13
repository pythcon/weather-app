<?php

$zipcode = $_GET['zipcode'];

$url = "http://api.openweathermap.org/data/2.5/weather?zip=".$zipcode.",INSERTAPICODEHERE; 


//Your API Key has to be obtained from openweathermap.org


$fp = fopen ( $url , "r" ); 
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}
     //this overrides commented earlier hardocded $data 

echo $contents ; 

?>
