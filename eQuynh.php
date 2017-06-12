<?php
echo "hoàng";
$token = 'EAAAAAYsX7TsBAMd3NjemUoTEWnovL0E05dXXABOejyjaUyGjeS7MW5f6y7Plcr2aJer7HYjZC4KvMj3NfRwUbMgdNLyaiJVYCiLjgSszoqkwQhsmBaaUCIZBYdIvqH9dnxZCZCvDPe5EyihzXCEywIjJZAMuOynwBh2DZAZCVVpbFAOrmiEPDHETLeUajkvGljNaV2eTGZA2jiHkqQ6w2ryB'; //Token Lấy Ở Phương Bách
$limitnf=10; // 20 Status Ở NewFeed 1 Lần
$puaru=json_decode(puaru('https://graph.facebook.com/v2.3/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);
for($i=1;$i<=count($puaru[data]);$i++){
set_time_limit(0);
$camxuc= array('LOVE');
$mess=$camxuc[rand(0,count($camxuc)-1)];
echo puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token.'');
}

//**Hãy Tôn Trọng Tác Giả Nếu Bạn Muốn Có Nhiều Sản Phẩm Miễn Phí Khác Để Dùng**//
//** Code By Puaru - Vina4U.BIZ**//
function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>
