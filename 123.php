<?php
echo "hoàng";
$token = 'EAACEdEose0cBAIMma46acr2DeANcJFPNZBg4K4zmb2TdhPkKTOCm7TDOJHIu69PO2ZCpbukfr4MHk21EFXmg1BmwBxg65KUoOMs7mOxKFkZBcYSooZCgwf4r8lnmhFItdNSnYWmZBnTDeqragnl9jEg12kcJlMgJlNUG4FrmVOx81hOA3YZB2l6QVgIB85kw91umHQkhSL3AZDZD'; //Token Lấy Ở Phương Bách
$limitnf=10; // 20 Status Ở NewFeed 1 Lần
$puaru=json_decode(puaru('https://graph.facebook.com/v2.3/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LOVE');
$mess=$camxuc[rand(0,count($camxuc)-1)];
echo puaru('https://graph.facebook.com/v2.3/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token=EAAAAAYsX7TsBAAQ68hBhbt3dphe7WgcaZChDOndaX5vOqGD5o6UXKyfVm6Wx9VZCZAw4aj31pTVXMobT0FpHNDo07wt4ZC1tWwm879ED46tVx7Um60g0bgUAKZBaRoZA21UZACnK8FfIaUdjnwLkzHEZB0kpLlGFXfl4YthNxlq94bxhqebHkySWnyjUYAdAKESiy1ZAIMoQPIEIRY6u1X8Br');
}

//**Hãy Tôn Trọng Tác Giả Nếu Bạn Muốn Có Nhiều Sản Phẩm Miễn Phí Khác Để Dùng**//
//** Code By Puaru - Vina4U.BIZ**//
function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>
