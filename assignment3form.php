<?php

$zipcode = $_GET['zipcode'];

$url = "http://api.openweathermap.org/data/2.5/weather?zip=".$zipcode.",us&APPID=fab414031e80b4f44132633f3d50ffad"; 


//Your API Key has to be obtained from openweathermap.org


$fp = fopen ( $url , "r" ); 
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}
     //this overrides commented earlier hardocded $data 

echo $contents ; 

?>