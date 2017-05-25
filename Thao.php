<?php
$token = 'EAAAAAYsX7TsBABqZBYvmSIfaG5e3LBzz5bXxrnbxiP6Bhyu68E2vtcUvRvAsv2i4KZB9CYKCbT8lZAweQKvlR4ZAChdwiyRWYMY96gXL5UZAVOHp4Ql4NDV7KCgny7pQSG6AVu4h8iSVYGvgzZAbTUpWTN0XpMNO7i0hFw73nd6e9bdzEtsI2h2RPCXhwI9NJOc9Jk0UwWJAZDZD'; //
$limitnf=5; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LOVE');
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
