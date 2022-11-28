<?php
    $client_id = "nLvaxDwu3n_Yev8q07tb";
    $client_secret = "GE8Yd9i3G4";
    $encText = urlencode("반갑습니다.");
    $postvars = "source=ko&target=en&text=".$encText;
    $url = "https://openapi.naver.com/v1/language/translate";
    $is_post = true;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, $is_post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $postvars);
    $headers = array();
    $headers[] = "X-Naver-Client-Id: ".$client_id;
    $headers[] = "X-Naver-Client-Secret: ".$client_secret;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec ($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "status_code:".$status_code."<br>";
    curl_close ($ch);
    if($status_code == 200) {
        echo $response;
    } else {
        echo "Error 내용:".$response;
    }
?>