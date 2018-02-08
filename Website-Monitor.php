<?php
$array = array( 'https://www.technoarea.in', 'https://www.bloggingmayor.com', );
         
foreach( $array as $value ) {
$URL  = $value;

$curlHandle = curl_init();

curl_setopt($curlHandle, CURLOPT_URL, $URL);

curl_setopt($curlHandle, CURLOPT_HEADER, true);

curl_setopt($curlHandle, CURLOPT_NOBODY  , true);  // we don't need body

curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

curl_exec($curlHandle);

$response = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

curl_close($curlHandle); // Don't forget to close the connection

if ($response == "200") {

echo "<a href='$value' target='_blank'>$value</a> Is Running Fine <br />",""; 

}

else {

echo "<a href='$value' target='_blank'>$value</a> Seems Down! <br />","";

}
			
		
         }
?>