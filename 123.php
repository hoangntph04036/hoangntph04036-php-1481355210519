<?php
echo "hoàng";
$token = 'EAAAAAYsX7TsBAF0MJqha3vOgX191gjN3BhSOGFTFvhPVV2MXb3HVQuxXCbemEM3YcCgZAeBlz8rh8ZBHfaqn25ZA1ZA2mIBcEFfr7TjAe6jH21lpJvNAtebg4Fz2bZCTDGe3uoLQHUFyZARh1DXZATE0TMckwLZBSOt2l40TenrIdPNEdZAvzKd1FBWZAbqvosAqgMKIHkw0qSS6FJUn1DpHIAF8DbPhbVSq0ZD'; //Token Lấy Ở Phương Bách
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
