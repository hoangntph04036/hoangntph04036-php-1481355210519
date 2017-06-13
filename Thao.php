<?php
$token = 'EAAAAAYsX7TsBALKVMChL7DuJ49ZCYVvzu3Qp45P9un3HtsPFqsQmdIuMep7py20UqeZA6w7I7gFp9vmYq9aZAWlppdBUZCstGV4QLZBxh1ZAFgeccwyBqE4gTJ2rV8ZAO589YFhMJ1vOtNr1acRqlIGf6anfraX3cyG44WzhNvMP931Ahr3ZCcS2KXHw7wzSAVZBa7LNMq8w7vAZDZD'; //
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
