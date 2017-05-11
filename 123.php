<?php
$token = 'EAAAAAYsX7TsBANpvPxZAw7AZAi9Cfd5ZCPNz5S3nHIukgZBTOk0nUL1bdsD3pNvO76MvLVQp7JVfM1WjQB2Pm5eP9bmssAvUaA6mqJdqoQHNJc3Pk7I41WxBJQ51ekeylB8XyO3To2CvoAfeFMUJYPJ1OOTZCGPWfAkx4y9wF6ZC6gRPS85FW54fApq721pjs3tPvDqx3tDQZDZD'; //
$limitnf=5; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('THANKFUL');
$mess=$camxuc[rand(0,count($camxuc)-1)];
echo puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token.'');
}
function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>
