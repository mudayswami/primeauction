<?php

function postApi($url,$postFields){
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, url('api').'/'.$url);
        curl_setopt($ch, CURLOPT_POST, true);
        
        // Prepare the file and path data
    
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
        $errorMessage = curl_error($ch);
        curl_close($ch);
        return response()->json(['error' => $errorMessage], 500);
        }
        
        curl_close($ch);
        
        return response()->json(json_decode($response, true));
}


?>