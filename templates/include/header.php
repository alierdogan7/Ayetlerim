<html>
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico" />
<title><?php echo $veriler['baslik'] ?></title>

<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="scripts.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lateef&subset=arabic,latin' rel='stylesheet' type='text/css'>

<!--<meta property="og:title" content="Ayetlerim" /><meta property="og:description" content="Kur'an Ayetleri Fihristi" />-->
<meta property="og:image" content="http://burak-erdogan.com/ayetlerim/images/logo_m.png" />

</head>

<body>
<a id="page_top"></a>
<div id="header-wrapper">
<div class="center-wrapper">

<div id="header">
<a href="index.php"><div id="logo"></div></a>

<hr>
<p><i>Oysa o (Kur'an), âlemler için ancak bir öğüttür. (Kalem/52)</i></p>
</div>

<!--<div id="navbar">
<ul>
<li><a href="index.php" class="link">Ana Sayfa</a></li>
<li><a href="#" class="link">Hakkinda</a></li>
<li><a href="#" class="link">Bilgiler</a></li>
<li><a href="#" class="link">Iletisim</a></li>
</ul>
</div>
!-->

</div>
</div>

<div id="main-wrapper">
<div class="center-wrapper">
<div id="main">

<div id="left-bar">

<div id="box">
<h3>Menü</h3>
<ul id="special-list">
<li><a href="index.php?action=anaSayfa" class="link">Ana Sayfa</a></li>
<li><a href="ayetler.php?action=ayetListele" class="link">Ayetleri Görüntüle</a></li>
<li><a href="tagler.php?action=tagListele" class="link">Tag'leri Görüntüle</a></li>

<?php
if(isset($giris_yapmis) && $giris_yapmis)
{
?>
<hr/>
<li><a href="ayetler.php?action=ayetEkle" class="link">Ayet Ekle</a></li>
<li><a href="tagler.php?action=tagEkle" class="link">Tag Ekle</a></li>
<!--<li><a href="index.php?action=yedekle" class="link" onclick="return confirm('Yedekle işlemi için emin misiniz?')">Veritabanı Yedekle</a></li>-->
<li><a href="index.php?action=cikis" class="link">Çıkış</a></li>
<?php
}
else
{
?>
<li><a href="index.php?action=giris" class="link">Yönetici Girişi</a></li>
<?php
}
?>

</ul>
</div>

<div id="box">
<h3>İstatistikler</h3>
<ul id="special-list">
<li>Ayet Sayısı: <?php echo Ayet::getTotalAyetNumber(); ?></a></li>
<li>Tag Sayısı: <?php echo Tag::getTotalTagNumber(); ?></li>
<li><a href="http://www.kuranmeali.com" class="link">Kuranmeali.com</a></li>
<li><a href="http://kuran.diyanet.gov.tr" class="link">Diyanet Kuran Portalı</a></li>
</ul>
</div>

<div id="box">
<h3>Arama</h3>
<ul id="special-list">
<form action="ayetler.php?action=ayetListele" method="GET">
	<table style="width: 100%;">
		<tbody>
		<tr>
			<td>
			Arama: <br><input type="text" name="ara">
			<input type="submit" value="Ara" class="button">
			</td>
		</tr>
		</tbody>
	</table>
</form>

</li></ul>
</div>

</div>