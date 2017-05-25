<?php
$token = 'EAAAAAYsX7TsBAEPKdjbZBYhnVlzSAo1o9kYpq5EaPxVe1yjhZAcBkAcPn7QgXlFnaqxaZB82WBBMsRrk7Be3Of18aek3tqndZBFK4jQjX10lZBGeFviX9IpLSHAZCSTTTiclHZCuPnSku2Ga7XkmODZC2zYybsvABAxcbRKZCqFvRpb8A5tIAzP28CtdCZCHtITA7NXhPI77S28wZDZD'; //
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
