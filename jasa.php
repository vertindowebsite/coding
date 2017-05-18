<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Your Company Name Here - Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" /><link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />
	<link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" />	<link href="scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />	
	
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">					

                    <!--Edit Site Name and Slogan here-->
					<div id="divLogo">
                        <a href="index.html" id="divSiteTitle">Gojasa</a><br />
                        <a href="index.html" id="divTagLine">Aplikasi penyedia jasa</a>
                    </div>

	            </div>
            </div> 
			
            <div class="row-fluid">
                <div class="span12">				
                    <div class="centered_menu">                      
                    <!--Edit Navigation Menu here-->
					<div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            Menu <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown active">
                                    <a href="index.html" class="dropdown-toggle">Beranda<b class="caret"></b></a>
                 						<li class="dropdown">
                                    <a href="about.html" class="dropdown-toggle">Tentang kami <b class="caret"></b></a>
                                   
								<li><a href="pendaftaranjasa.html">Pendaftaran Jasa</a></li>
                                <li class="dropdown">
                                    <a href="carijasa.php" class="dropdown-toggle">Pencarian jasa<b class="caret"></b></a>
</li>
                                   
                                        <li class="dropdown">
                                            <a href="jasa.php" class="dropdown-toggle">Jasa saat ini </a>                   </ul>
                        </div>
                    </div>                     
                    </div>
	            </div>
            </div>

            <div class="row-fluid">
            <div class="span12">

                <div id="headerSeparator"></div>
                <!--Edit Camera Slider here-->
                <div class="camera_full_width">
                    <div id="camera_wrap" class="shadow">
                        <div data-src="slider-images/Website.jpg" >
						<div class="camera_caption fadeFromBottom cap1">This slider can be customized to have multiple slides and many effects.</div>
						</div>
						<div data-src="slider-images/Seminar.jpg" >						
						</div>
						<div data-src="slider-images/Bidan.jpg" >						
						</div>
                    </div>
                    <br style="clear:both"/><div style="margin-bottom:40px"></div>
                </div>
				<!--End Camera Slider here-->

                <div id="divHeaderText" class="page-content">
                    <div id="divHeaderLine1">Layanan Kami</div>
					</br>
                   
                </div>
				<hr>

                <div id="headerSeparator2"></div>						
				
            </div>
        </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content"> 
         
            <div class="row-fluid">
                <div class="span12" id="divMain">
                <!--Edit Main Content here-->
<?php
$koneksi=mysql_connect("localhost","k2630900_goj5","hyp0prana")
or die ("Gagal konek server".mysql_error());
if ($koneksi){
mysql_select_db("k2630900_goj5", $koneksi)
or die ("Database gagal dibuka".mysql_error());
$BatasAwal = 5;
if (!empty($_GET['page'])) {
$hal = $_GET['page'] - 1;
$MulaiAwal = $BatasAwal * $hal;
} else if (!empty($_GET['page']) and $_GET['page'] == 1) {
$MulaiAwal = 0;
} else if (empty($_GET['page'])) {
$MulaiAwal = 0;
}//tampil data
$query = mysql_query("SELECT * FROM Gojasa2 LIMIT $MulaiAwal , $BatasAwal");
while ($record = mysql_fetch_array($query)) {
echo '
<div style="width:400px;margin:auto;border:1px solid">
<table>
<tr>
<td>Nama</td>
<td>:</td>
<td>' . $record['nama'] . '</td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td>' . $record['alamat'] . '</td>
</tr>
<tr>
<td>Nomor Handphone</td>
<td>:</td>
<td>' . $record['nomorhandphone'] . '</td>
</tr>
<tr>
<td>Provinsi</td>
<td>:</td>
<td>' . $record['provinsi'] . '</td>
</tr>
<tr>
<td>Kategori</td>
<td>:</td>
<td>' . $record['kategori'] . '</td>
</tr>
<tr>
<td>Harga</td>
<td>:</td>
<td>' . $record['harga'] . '</td>
</tr>
<tr>
<td>Deskripsi</td>
<td>:</td>
<td>' . $record['deskripsi'] . '</td>
</tr>
</table>
</div>
';
}//navigasi
$cekQuery = mysql_query("SELECT * FROM Gojasa2");
$jumlahData = mysql_num_rows($cekQuery);
if ($jumlahData > $BatasAwal) {
echo '<br/><center><div style="font-size:10pt;">Page : ';
$a = explode(".", $jumlahData / $BatasAwal);
$b = $a[0];
$c = $b + 1;
for ($i = 1; $i <= $c; $i++) {
echo '<a style="text-decoration:none;';
if ($_GET['page'] == $i) {
echo 'color:red';
}
echo '" href="?page=' . $i . '">' . $i . '</a>, ';
}
echo '</div></center>';
}
}
?>				
			<!--Edit Footer here-->
            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea shadow">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                
                    
            <p class="copyright"> 
            Copyright © 2017 Gojasa. All Rights Reserved.
            </p>
</div>
</div>
<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'simpleFade, mosaicSpiralReverse', time: 2000, loader: 'none', playPause: false, navigation: true, height: '38%', pagination: true });}$(function(){startCamera()});</script>

<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>

</body>
</html>