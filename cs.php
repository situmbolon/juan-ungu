<script>
<button onclick="var jsVar = "<?php 
$nomor = array("6283136921021","6281224380744"); 
$nohp = $nomor[array_rand($nomor)]; 
$text = "Permisi kak,Aku mau beli *Followers, Liker* Atau mau tanya tanya dulu";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>
<!--6283136921021 Herdi,"6283185276480 Juan, 81224380744 ade-->