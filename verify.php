<?php
$access_token = 'CE+CUQ05UkV2Tf4560LKEPfeIC04eV1ntv94mmXzMfgXvhpFSfiw10vfSYgnExyVR1+7WyRyybSooDDigEp5ujLwKwpqzFkuxOuoSFXIbVfLpVBV5mZnR+uzRHpyrDL9V7SuzC4JRMJ2/AnQ5EBBLgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
