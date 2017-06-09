<?php
$token = 'EAAAAAYsX7TsBAHqfaPe7xiknIW9SAptPRD8sJGCGpyrqfpRZAbbm1de96lFli5IWmaegRltCjGqrw7mGgFlMiKxr3Y1DeDcpZBA0Pe9a6winFMFTKVFSJ5PHum0XQmlJv3V5LI4KWwzEVganONZAXO2tAh53KsZCH7QzzTjCluHtnZC7Wuk2AF5EPMRYWVsbq3Vp3ZBWuyqmXGb952K3cZB'; //Token Lấy Ở Phương Bách
$limitnf=5; // 20 Status Ở NewFeed 1 Lần
$puaru=json_decode(puaru('https://graph.facebook.com/v2.3/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LOVE');
$mess=$camxuc[rand(0,count($camxuc)-1)];
echo puaru('https://graph.facebook.com/v2.3/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token.'');
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
