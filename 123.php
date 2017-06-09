<?php
$token = 'EAACEdEose0cBAFx2zojOyfB8uLYArjVzYnUVZBClWtx3fLJXROm9cdL7IvXhdxZCwgpfZBdc77lZAY6aOGRIGAas7ZBtSBtlZAMHisCk8pd3Rpmv0zBACdYw0nNZC9OkiiuNkm0byIBjNpwTnTP9eAbB8XuGOIZCRxjbDFXNxq31uHCoP70Foj4DwV0xQva45dsZD'; //Token Lấy Ở Phương Bách
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
