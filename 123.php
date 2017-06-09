<?php
$token = 'EAAAAAYsX7TsBAEgo0yeemMBTsBIFaZAUNusbT1cpU1wyGf9z9WCJ2XLrBENd0EZCo9Y27wKgB3DC8pEd7VHoF9uGjFQvZB1iuYrCc71iakU4kUEbw2JDbHOhcZAfyFvkjudbID0BhK7zEtAvfVAgLCNMx7oxlJCr8a37ZBBEM8lTVVHwWlnauKvZBJugu1e8jjkTSAb44rmn6FZALYU3a0Q';
$limitnf=5;
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
