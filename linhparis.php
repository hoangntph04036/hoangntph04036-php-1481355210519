<?php
$token = 'EAAAAAYsX7TsBAL9tNDC4s3rTrPgAdJndcAYJgibiEfOI8foTFzj5qxFt5OP2sr6HAXylhZCmYnGE00Fk6qk0RuD7v2JGXSvSP6hTNZCTaWxAZCu2znU1TXj2EpBjm0C3E7TeMysPFLtgpy1rS7p3o0uzzq0edDzaoLY1keuC1jh3GqiNUdgc3SPNttGF2lB5tGZBesM8kAZDZD'; //
$limitnf=10; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
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
