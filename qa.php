<?php
$token = 'EAAAAAYsX7TsBAEaBaafJGw81NZBBB30zEZBinR2ICZAd2ZCaCmXEShsxoX0PDzSPINiCoyZAm2UudVGdnSJgTwf3mA8njljRoVhDcrzOQLuALZC5kLcAS2kuGEFGAb6KYUrW74pPzHrZBKRS0lz1wVeIZBV3zph8M6Xmxf5WQ7eZCbyInVPxi1wkd1vw3s6ZAeS4jPMsgkAYEZCr5uDgbcCZAXgI'; //
$limitnf=5; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LIKE');
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
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status 
