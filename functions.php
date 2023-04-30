<?php

    function initiatAPI(){

        $url = "https://api.nomics.com/v1/currencies/ticker?key=453c0152bb0a33a7ac02d0370fe54642b87da0e1";
        $curl = curl_init();

        //options get request
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        //send request
        $result = curl_exec($curl);

        //close connection
        curl_close($curl);
        
        return $result;

    }
        //convert To Array
    function convertToArray(){

        $result = initiatAPI();
        $response_array = json_decode($result,true);
        return $response_array;
    }