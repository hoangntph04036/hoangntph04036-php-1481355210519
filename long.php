<?php
$token = 'EAAAAAYsX7TsBAAH7Lo3ZAXk0XxNEdDJfZCzkLcsINXK4WyuzWnLHJIrBjZCyKh30xZB4iHTHvpKvByhBmVA7lRDEqmCkyZAItCkKucCoDKjUfMZC0zUc5DodIwFaqAIedAZCfDXj8P6zBRsRtPL8dWZBfbgv1anf4i6DnIejdGCE7JbbtvqER1iW9HXW8OFMdyOhkONy3jbqmPOBX9Qj8V6W'; //
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
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status 
