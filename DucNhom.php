<?php
$token = 'EAAAAAYsX7TsBAHRTcC0xaZAjSNWXh1GYsy7dWgpZASAwGanSH1bvlN80LcwdOXv0LcJDkAWNt4FZAFs2JaDMhHjgiJwIsMaR1Y5iQR0ak8alPLEbdJiRSHfEGpmqhWxBz7eme4xhoAUtiHdHnGiNg1ZBoa7smO4WjL4xjhrnZA5FlEbhhl88suCnYfpecc8HODo7A567Dj94HCtEJhuEryRp4ZA3o2MKAZD'; //
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
