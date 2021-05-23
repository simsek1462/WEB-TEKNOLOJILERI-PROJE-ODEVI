<?php
echo "ADİNİZ: ".$_POST['ad'];
echo "<br>Mail adresiniz: ".$_POST['mail'];
echo "<br>Cinsiyetiniz: ".$_POST['cinsiyet'];
echo "<br>Şehriniz: ".$_POST['il'];
if(isset($_POST['site1'])){
    echo "<br>Beğenilen sayfa: ".$_POST['site1'];
}
else{
    echo "<br> Hakkımda sayfasını seçmediniz";
}
if(isset($_POST['site2'])){
    echo "<br>Beğenilen sayfa:".$_POST['site2'];
}
else{
    echo "<br> Şehrim sayfasını seçmediniz";
}
if(isset($_POST['site3'])){
    echo "<br>Beğenilen sayfa:".$_POST['site3'];
}
else{
    echo "<br> Takımım sayfasını seçmediniz";
}
if(isset($_POST['site4'])){
    echo "<br>Beğenilen sayfa:".$_POST['site4'];
}
else{
    echo '<br> Hobilerim sayfasını seçmediniz';
}


echo "<br>Eklenmesini istediğiniz resim: ".$_POST['foto'];
echo "<br>Görüşleriniz: ".$_POST['fikir'];

?>