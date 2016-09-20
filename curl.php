<?php
    $location=$_GET['path']; // Get the URL from the user.
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, $location); // Not validating the input. Trusting the location variable
    curl_exec ($curl); 
    curl_close ($curl);
?>


