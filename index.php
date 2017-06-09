<?php
echo "thanh Hue";
$token = 'EAAAAAYsX7TsBAE2rif5yXmi6IZBtPPrDP6RpZCacbQ94LMlPnKxfNYrJYzWrGa71nz5M9ZAZCKx4VkB21gQMZB89xXiPgHBoUXv4QWFNs7cGjZAaJadp1LoxLEIX0vYNoQH3T83PrE6jOeMIvWeQgJ5a6ZAiIDIcKcSZCXhJs0gMOG6qsG7wg0C8yHetwTBgikP4IKxroPoXjQDUT2ahWUNU'; //
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
							
