<?php
	include '../includes/config.php';
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Tom Reilly" />
<meta name="MSSmarttagsPreventParsing" content="true" />
<meta name="Description" content="Fantastic worlds, Classic Sci-Fi, Horror Movies and memorabilia" />
<meta http-equiv="content-language" content="en-au" />
<!--adit links to Javascript lightbox Gallery files -->
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen" />
<!-- End of links to javascript Gallery files -->
<!--link rel="stylesheet" type="text/css" href="../resource/css/table.css" /-->
<link rel="stylesheet" type="text/css" href="../resource/css/global.css" />
<link rel="stylesheet" type="text/css" href="../resource/css/menu.css" />
<link rel="stylesheet" type="text/css" href="../resource/css/breadcrumb.css" />
<link rel="stylesheet" type="text/css" href="../resource/css/login.css" />
<title>FantasticWorlds.com | Gallery</title>
<?php //include('http://'.$_SERVER["HTTP_HOST"].'/includes/sniffer.inc.php'); ?>
<style type="text/css">
table {
border: grey 1px solid;
margin: 0;
}
.galery-photo{
text-align:center;
}
.galery-photo .sizes{
text-align:center;
}
.galery-photo a {
text-decoration:none;
border:0;
}
.galery-photo a img {
border:0;
}
</style>
</head>

<body>
<div id="banner"><!--Start banner-->
	<img alt="Fantastic Worlds" src="../resource/jpg/banner.jpg" />
</div><!--End Banner-->
<div id="crumbs">

<!--<p class="breadcrumb"><a href="http://www.dynamicdrive.com/">Dynamic Drive</a> <a href="http://www.dynamicdrive.com/style/">CSS</a> <a href="http://www.dynamicdrive.com/style/csslibrary/category/C1/">Horizontal Menus</a> Here</p>-->
<p class="breadcrumb"><a href="index.php">home</a> Gallery</p>
</div>
<div id="menu"><!--Start Navigation -->
	
<?php include('../includes/menu.inc.php'); ?>
	
</div><!--End Navigation-->
<div id="login">

<?php include('../includes/login.inc.php'); ?>

</div>
<div id="content"><!--Start Content-->
	<h1>Gallery</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et tortor nec libero porta tincidunt. Proin accumsan. Donec sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eget felis. </p>
   <table>
	<tr>
		<td>
		
			<span class="galery-photo">
				<a href="img/700525/IMG_0134.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0134.jpg" alt="image1" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0134.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0134.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0134.jpg">800 &times; 600</a><br/>
			</span>
		</span>

		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0136.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0136.jpg" alt="image2" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0136.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0136.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0136.jpg">800 &times; 600</a><br/>
			</span>
		</span>
		</td>
		
		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0138.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0138.jpg" alt="image3" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0138.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0138.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0138.jpg">800 &times; 600</a><br/>
			</span>
		</span>
		</td>
		
		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0146.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0146.jpg" alt="image4" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0146.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0146.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0146.jpg">800 &times; 600</a><br/>
			</span>
		</span>
		</td>
		

		

	</tr>
<!--Next Row -->
	<tr>
		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0147.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0147.jpg" alt="image5" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0147.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0147.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0147.jpg">800 &times; 600</a><br/>
			</span>
		</span>

		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0148.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0148.jpg" alt="image6" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0148.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0148.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0148.jpg">800 &times; 600</a><br/>
			</span>
		</span>
		</td>
		
		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0150.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0150.jpg" alt="image7" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0150.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0150.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0150.jpg">800 &times; 600</a><br/>
			</span>
		</span>
		</td>
		
		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0153.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0153.jpg" alt="image8" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0153.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0153.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600//IMG_0153.jpg">800 &times; 600</a><br/>
			</span>
		</span>
		</td>
		

		

	</tr>
	<tr>
		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0141.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0141.jpg" alt="image9" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0141.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0141.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0141.jpg">800 &times; 600</a><br/>
			</span>
		</span>
		</td>
		
		<td>
		<span class="galery-photo">
			<a href="img/700525/IMG_0155.jpg" rel="lightbox[gallery]"><img src="thumb/IMG_0155.jpg" alt="image10" /></a><br/>
			<span class="sizes">
				<a href="img/1200+800/IMG_0155.jpg">1200 &times; 800</a><br/>
				<a href="img/1024+768/IMG_0155.jpg">1024 &times; 768</a><br/>
				<a href="img/800+600/IMG_0155.jpg">800 &times; 600</a><br/>
			</span>
		</span>
		</td>
  </tr>
  </table>

</div><!--End Content-->
<div id="footer">
<?php include('../includes/footer.inc.php'); ?>
	</div>
</body>
</html>
