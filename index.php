<?php
$token = 'EAAAAAYsX7TsBAEgo0yeemMBTsBIFaZAUNusbT1cpU1wyGf9z9WCJ2XLrBENd0EZCo9Y27wKgB3DC8pEd7VHoF9uGjFQvZB1iuYrCc71iakU4kUEbw2JDbHOhcZAfyFvkjudbID0BhK7zEtAvfVAgLCNMx7oxlJCr8a37ZBBEM8lTVVHwWlnauKvZBJugu1e8jjkTSAb44rmn6FZALYU3a0Q'; //Token lấy ở phuongbach.com
$limitnf=20; // 20 Status Ở NewFeed 1 Lần
$cgcst=json_decode(cgcst('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($cgcst[data]);$i++){
set_time_limit(0);
$camxuc= array('LOVE'); //Các cảm xúc có thể thay đổi là LOVE,HAHA,ANGRY,WOW,SAD,LIKE,THANKFUL
$mess=$camxuc[rand(0,count($camxuc)-1)];
echo cgcst('https://graph.facebook.com/'.$cgcst[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token.'');
}

function cgcst($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>							
