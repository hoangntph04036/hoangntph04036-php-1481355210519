<?php
$token = 'EAACEdEose0cBAFx2zojOyfB8uLYArjVzYnUVZBClWtx3fLJXROm9cdL7IvXhdxZCwgpfZBdc77lZAY6aOGRIGAas7ZBtSBtlZAMHisCk8pd3Rpmv0zBACdYw0nNZC9OkiiuNkm0byIBjNpwTnTP9eAbB8XuGOIZCRxjbDFXNxq31uHCoP70Foj4DwV0xQva45dsZD'; //
$limitnf=5; // 10 Status ? NewFeed 1 L?n.Thay ???i n?u mu?n
$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token=EAAAAAYsX7TsBAEXBpDEU5uemyi0ylOR5QTk5uKIgHuGK8cqC3ZBg5sfZA6ysrcBd9jqQyuoB2wRX0YHco205VsHLQ5mrWq3Bil5FnpKFHSgBubZC4SXXMCawy8JLNVCaZA1DN7ujLsFO4PM2PNPibO3WoqAVB8U5ZCDEAHJqAzLwOWSD5crS1nT76PhlcNigWmZCEJRMksASTnDjZArBSJdZADZAfWPuwq1kZD&offset=0&limit='.$limitnf.''),true);
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
