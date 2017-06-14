<?php
$token = 'EAAAAAYsX7TsBAEmTuAWiK7Plupi75J5hT3hqRBK2wyjT2cJ2fOw1eyk6RkCRoBhCobG6XP1ItZCjgYJ6pI6J5LOIxcgc1P72JQmWFQ1ycMHyC4Jf9SNoTI9bwlAZCLPCZAMH816fbeGK3ZCDoWAFH0ZCfZBkjEUZACstlnU8GoD6NMeK4mCjI9PYo3l0SbUXmmuUzhlly4FGgG5ZAWqGc6Gt'; //
$limitnf=7; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
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
