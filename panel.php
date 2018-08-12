<!DOCTYPE html>
<!-- saved from url=(0046) #/css-variables-with-php/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  

  <meta name="viewport" content="width=device-width">

  
  <title>PHOTONG PANEL</title>

  <link rel="apple-touch-icon" href="https://cdn.css-tricks.com/apple-touch-icon.png">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="msapplication-TileImage" content="https://cdn.css-tricks.com/mstile-144x144.png">
  <META HTTP-EQUIV="Refresh" CONTENT="30;URL=../photong/panel.php">

  <meta property="fb:pages" content="124436167285">

  <link rel="search" type="application/opensearchdescription+xml" href="https://cdn.css-tricks.com/opensearch.xml" title="CSS-Tricks Search">

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/CssTricks">

  <link rel="stylesheet" href="./css/fonts.css">
  <!--[if !IE]><!-->
  <link rel="stylesheet" href="./css/style.css">
  <!--<![endif]-->
  <!--[if lt IE 9]>
  <link rel="stylesheet" href="https://cdn.css-tricks.com/wp-content/themes/CSS-Tricks-16/css/oldie.css">
  <![endif]-->
  <!--[if IE 9]>
  <link rel="stylesheet" href="https://cdn.css-tricks.com/wp-content/themes/CSS-Tricks-16/style.css?v=15.5>
  <![endif]-->

    
  <script id="twitter-wjs" src="./css/widgets.js "></script><script async="" src="./css/analytics.js "></script><script>window._wca = window._wca || [];</script>

<!-- This site is optimized with the Yoast SEO plugin v7.5 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="When people are asked about features they would like to CSS, &quot;variables&quot; always seems to come up. Whether or not this is a good idea is still something I personally haven&#39;t decided on, but I&#39;d lean toward yes. Regardless, using PHP, it is trivially easy to use variables in CSS. This is certainly not a new trick, but">
<link rel="canonical" href=" #/css-variables-with-php/">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="CSS Variables with PHP | CSS-Tricks">
<meta property="og:description" content="When people are asked about features they would like to CSS, &quot;variables&quot; always seems to come up. Whether or not this is a good idea is still something I personally haven&#39;t decided on, but I&#39;d lean toward yes. Regardless, using PHP, it is trivially easy to use variables in CSS. This is certainly not a new trick, but">
<meta property="og:url" content=" #/css-variables-with-php/">
<meta property="og:site_name" content="CSS-Tricks">
<meta property="article:publisher" content="https://www.facebook.com/CSSTricks">
<meta property="article:section" content="Article">
<meta property="article:published_time" content="2009-12-03T07:21:57+00:00">
<meta property="article:modified_time" content="2013-06-27T14:04:39+00:00">
<meta property="og:updated_time" content="2013-06-27T14:04:39+00:00">
<meta property="og:image" content="https://cdn.css-tricks.com/wp-content/uploads/2014/03/css-tricks-star.png">
<meta property="og:image:secure_url" content="https://cdn.css-tricks.com/wp-content/uploads/2014/03/css-tricks-star.png">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="When people are asked about features they would like to CSS, &quot;variables&quot; always seems to come up. Whether or not this is a good idea is still something I personally haven&#39;t decided on, but I&#39;d lean toward yes. Regardless, using PHP, it is trivially easy to use variables in CSS. This is certainly not a new trick, but">
<meta name="twitter:title" content="CSS Variables with PHP | CSS-Tricks">
<meta name="twitter:site" content="@Real_CSS_Tricks">
<meta name="twitter:image" content="https://cdn.css-tricks.com/wp-content/uploads/2014/03/css-tricks-star.png">
<meta name="twitter:creator" content="@chriscoyier">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<!-- / Yoast SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="CSS-Tricks » CSS Variables with PHP Comments Feed" href=" #/css-variables-with-php/feed/">
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" id="jetpack-search-widget-css" href="./css/search-widget-frontend.css" type="text/css" media="all">
<link rel="stylesheet" id="jetpack-widget-social-icons-styles-css" href="./css/social-icons.css" type="text/css" media="all">
<script src="./css/jquery-3.2.1.min.js "></script>
<script type="text/javascript">
/* <![CDATA[ */
var related_posts_js_options = {"post_heading":"h4"};
/* ]]> */
</script>
<script src="./css/related-posts.min.js "></script>
<link rel="https://api.w.org/" href=" #/wp-json/">
<link rel="shortlink" href="https://wp.me/p354tK-1h8">
<link rel="alternate" type="application/json+oembed" href=" #/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcss-tricks.com%2Fcss-variables-with-php%2F">
<link rel="alternate" type="text/xml+oembed" href=" #/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcss-tricks.com%2Fcss-variables-with-php%2F&amp;format=xml">

<!-- Better Art Direction Styles -->



<link rel="dns-prefetch" href="https://v0.wordpress.com/">
<link rel="dns-prefetch" href="https://jetpack.wordpress.com/">
<link rel="dns-prefetch" href="https://s0.wp.com/">
<link rel="dns-prefetch" href="https://s1.wp.com/">
<link rel="dns-prefetch" href="https://s2.wp.com/">
<link rel="dns-prefetch" href="https://public-api.wordpress.com/">
<link rel="dns-prefetch" href="https://0.gravatar.com/">
<link rel="dns-prefetch" href="https://1.gravatar.com/">
<link rel="dns-prefetch" href="https://2.gravatar.com/">
<style type="text/css">img#wpstats{display:none}</style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<script async="" src="./css/s-201822.js "></script>

<style id="fit-vids-style">.fluid-width-video-wrapper{width:50%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed, .fluid-width-video-wrapper video {position:absolute;top:0;left:0;width:50%;height:50%;}</style><script type="text/javascript" charset="utf-8" async="" src="./css/button.7db838345f9545c91ea4497f64abb814.js "></script><script type="text/javascript" charset="utf-8" async="" src="./css/tweet.af76d8839be6d70ca562e44fda5922ff.js "></script></head>

<body class="post-template-default single single-post postid-4906 single-format-standard woocommerce-js category-article">

 
<header class="site-header">

  <div class="menu-toggle-area">
    <button id="mobile-menu-toggle" class="button button-header mobile-menu-toggle">
      </svg>
    </button>
  </div>

  <div class="logo">
    <a href="https://css-tricks.com/">
       
      </svg>
    </a>
  </div>
</form></div>          </div>

</header>

    <!--div class="all-site-wrap">
  
    <nav class="main-nav" id="main-nav">

  <ul>
    <li class="home">
      <a href=" #/">
        <svg class="icon-nav-home" width="26px" height="26px">
          <use xlink:href="#icon-nav-home"></use>
        </svg>
        <span>Home</span>
      </a>
    </li>
    <li class="videos">
      <a href=" #/video-screencasts/">
        <svg class="icon-nav-video" width="26px" height="26px">
          <use xlink:href="#icon-nav-video"></use>
        </svg>
        <span>Videos</span>
      </a>
    </li>
    <li class="almanac">
      <a href=" #/almanac/">
        <svg class="icon-nav-almanac" width="26px" height="26px">
          <use xlink:href="#icon-nav-almanac"></use>
        </svg>
        <span>Almanac</span>
      </a>
    </li>
    <li class="gallery">
      <a href=" #/gallery/">
        <svg class="icon-nav-gallery" width="26px" height="26px">
          <use xlink:href="#icon-nav-gallery"></use>
        </svg>
        <span>Gallery</span>
      </a>
    </li>
    <li class="snippets">
      <a href=" #/snippets/">
        <svg class="icon-nav-snippets" width="26px" height="26px">
          <use xlink:href="#icon-nav-snippets"></use>
        </svg>
        <span>Snippets</span>
      </a>
    </li>
    <li class="forums">
      <a href=" #/forums/">
        <svg class="icon-nav-forums" width="26px" height="26px">
          <use xlink:href="#icon-nav-forums"></use>
        </svg>
        <span>Forums</span>
      </a>
    </li>
    <li class="newsletter">
      <a href=" #/newsletters/">
        <svg class="icon-nav-newsletter" width="26px" height="26px">
          <use xlink:href="#icon-nav-newsletter"></use>
        </svg>
        <span>Newsletter</span>
      </a>
    </li>
    <li class="jobs">
      <a href=" #/jobs/">
        <svg class="icon-nav-jobs" width="26px" height="26px">
          <use xlink:href="#icon-nav-jobs"></use>
        </svg>
        <span>Jobs</span>
      </a>
    </li>
    <li class="guides">
      <a href=" #/guides/">
        <svg class="icon-nav-guide" width="26px" height="26px">
          <use xlink:href="#icon-nav-guide"></use>
        </svg>
        <span>Guides</span>
      </a>
    </li>
    <li class="shop">
      <a href=" #/shop/">
        <svg class="icon-nav-shop" width="26px" height="26px">
          <use xlink:href="#icon-nav-shop"></use>
        </svg>
        <span>Shop</span>
      </a>
    </li>
  </ul>

</nav-->
<div class="page-wrap">

  <article id="post-4906" role="main" class="instapaper_body h-entry e-content">

    <header class="mega-header">

      <h1 class="p-name">
                ControlPanal            </h1>
				
    </header>

    <p class="author-byline">

      <span class="author-and-date">
                By
        <a href="http://rbtech.co.th/">
                    <span class="p-author">
            rbtech.co.th          </span>
			
        </a>
                
        <time datetime="2009-12-03" class="dt-published">
          <div id="showData"></div>      </time>
      </span>

      
    </p>

    <div class="article-content">

<?php
require('calculate.php');
?>
<head>
  <title>poke</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	td {
		border: 1px solid black;
		text-align:left;
		padding: 0px 5px;
	}
</style>
<script>
	$(document).ready(function() {
		$('button').each(function() {
			$(this).click(function() {
				var id = $(this).attr('id');
				$("form[id=id]").submit();
			});
		});
		$("#search").click(function() {
			$(this).select();
		});
		$("#refresh").click(function() {
			$("input[name='search']").val('');
			location.reload();
		});
	});
</script>
<body>
	<?php
	$sql = "SELECT deposite, withdraw, bonus FROM reportPoke";
	$result = $con->query($sql);
	$searchRenders = [];
	$localRow = [];
	while ($row = $result->fetch_assoc()) {
		$localRow[] = $row;
		$deposite += $row['deposite'];
		$withdraw += $row['withdraw'];
		$bonus += $row['bonus'];
 
	}
	?>
	<?php
	if ($_POST['search']) {
		$search = $_POST['search'];
		$search = str_replace(' ', '', $search);
		$search = json_encode($search);
		$searchLengthBefore = strlen($search);
		$search = substr($search, 1, $searchLengthBefore-2);
		$searchLength = strlen($search);
	}
	$sql = "SELECT id, lineId, name, net FROM poke WHERE id>1";
	$result = $con->query($sql);
	$searchRenders = [];
	$localRow = [];
	while ($row = $result->fetch_assoc()) {
		$localRow[] = $row;
		$money += $row['net'];
		
		
	}
	?>
	
	<h2>
		<form action="" method="post">
			<span>ค้นหา </span>
			<input type='text' id='search' name='search' placeholder="search" value="<?php echo json_decode("\"$search\"", 1);?>">
			<button onclick="submit();"><icon class='fa fa-search'></icon></button>
			<button><icon id='refresh' class='fa fa-refresh'></icon></button>
		</form>
	</h2>
	<table width="600" border="1">
	<tr>
			<th></th>
			<th><div align="center"><b> เงินฝาก</div></th>
			<th><div align="center"> <b>ถอน</div></th>
			<th><div align="center"><b>คงเหลือ</div></th>
			<th><div align="center"><b>เครดิต</font></div></th>
			<th><div align="center"><b>ยอดบวก/ลบ</div></th>
			<th><div align="center"><b></font></div></th>
		</tr>
		<td></td>
			<td><div align="center"><b><font  size="4" color=“#0000CC”><?php echo $deposite; ?></div></th>			
			<td><div align="center"> <b><font  size="4" color=“#0000CC”><?php echo  $withdraw; ?> </div></th>
			<td><div align="center"><b><font  size="4" color=“#0000CC”><?php echo $deposite-$withdraw; ?> </div></th>
			<td><div align="center"><b><font  size="4" color=“#0000CC”><?php echo $money; ?></div></td>
			<td><div align="center"><b><font  size="4" color=“#0000CC”><?php echo  $deposite-$money-$withdraw; ?></font></div></th>
			<td><div align="center"><b></div></td>
 		<tr>
		    <th width="70"> <div align="center">User ID</div></th>
		    <th width="70"> <div align="center">Name</div></th>
		    <th width="70"> <div align="center">Balance</div></th>
		    <th width="70"> <div align="center">Quantity</div></th>
		    <th width="70"> <div align="center">Bonus</div></th>
		    <th width="70"> <div align="center">Confirm</div></th>
		    <th width="70"> <div align="center">Fixed</div></th>
		</tr>
			
		<?php
		foreach ($localRow as $row):
			if ($_POST['search']) {
				$nameLength = strlen($row['name']);
				$name = str_replace(' ', '', $row['name']);
				for ($i=0; $i<=($nameLength-$searchLength); $i++) {
					$searchPart = substr($name, $i, $searchLength);
					if (!in_array('\\', str_split($search)) && $searchPart[0] == '\\') {
						$i += 5;
						continue;
					}
					if (strcasecmp($search, $searchPart) == 0) {
						$searchRenders[] = $row['id'];
						break;
					}
				}
				if (!in_array($row['id'], $searchRenders)) continue;
			}
		?>
		<tr>
			<form action="calculate.php" method="post" id='<?php echo $row['id']; ?>'>
				<?php foreach ($row as $n => $v): ?>
				<?php if ($n == 'lineId') continue; ?>
				<?php
					if ($n == 'name') {
						$v = json_decode($v, 1);
						$style = 'style = "min-width: 200px;"';
					}
					else {
						$style = '';
					}
				?>
				<td <?php echo $style; ?>><?php echo $v; ?></td>
				<?php endforeach; ?>
				<td style="padding: 0;"><div align="center"><input name='money' type='text' size='10'></div></td>
				<td style="padding: 0;"><div align="center"><input name='bonus' type='text' size='5'></div></td>
				<td style="padding: 0;"><div align="center"><button name='submit' class=" btn-outline-dark btn-sm"  id='<?php echo $row['id']; ?>' value='1'>ตกลง</button></div></td>
				<td style="padding: 0;"><div align="center"><button name="fix" class=" btn-outline-dark btn-sm" id="<?php echo $row['id']; ?>" value='1'>แก้ไข</button></div></td>
				<input type="hidden" name="lineId" value="<?php echo $row['lineId']; ?>">
				<input type="hidden" name="name" value='<?php echo str_replace("'", "&apos;", $row['name']); ?>'>
				<input type="hidden" name="net" value="<?php echo $row['net']; ?>">
			</form>
		</tr>
		<?php endforeach; ?>
	</table>
</body>      

    <div class="footer-section-3">

      <div class="module module-jobs">

 

  </footer>

  <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none"><symbol id="icon-anchor" viewBox="0 0 54.89 64"><title>icon-anchor</title><path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" d="M26.96 13v50"></path><path fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="2" d="M13.96 50l-10-3-3 10M39.96 50l10-3 4 10"></path><path d="M49.71 47A24 24 0 0 1 27 63 24 24 0 0 1 4.21 47M17.96 17h18" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="2"></path><circle cx="26.96" cy="7" r="6" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"></circle></symbol><symbol id="icon-close" viewBox="0 0 95.08 95.09"><title>icon-close</title><path d="M58.31 47.47l34.58-34.58a7.63 7.63 0 0 0 0-10.69 7.63 7.63 0 0 0-10.69 0L47.62 36.78 13 2.19a7.63 7.63 0 0 0-10.69 0 7.63 7.63 0 0 0 0 10.69l34.6 34.6L2.33 82.07a7.29 7.29 0 0 0 0 10.69 7.63 7.63 0 0 0 10.69 0l34.6-34.6 34.6 34.6a7.27 7.27 0 0 0 10.68 0 7.63 7.63 0 0 0 0-10.69z" data-name="Layer 1"></path></symbol><symbol id="icon-email" viewBox="0 0 100 68.89"><title>icon-email</title><path d="M36.25 38.44L47.74 49.1a3.33 3.33 0 0 0 4.51 0l11.5-10.66 24.69 23.78H11.56zM93.33 11v46.6L68.68 33.85zM6.67 11l24.65 22.85L6.67 57.64zm5.1-4.37h76.46L50 42.12zM4.44 0A4.51 4.51 0 0 0 0 4.44v60a4.51 4.51 0 0 0 4.44 4.44h91.12a4.51 4.51 0 0 0 4.44-4.44v-60A4.51 4.51 0 0 0 95.56 0z" data-name="Layer 1"></path></symbol><symbol id="icon-link" viewBox="0 0 100 58.84"><title>icon-link</title><path d="M78.47 48H49.21a10.66 10.66 0 0 1-9-4.91h10.58A21.57 21.57 0 0 0 71.7 26.64h6.76a10.67 10.67 0 0 1 0 21.33zm-67.6-26.47a10.67 10.67 0 0 1 10.67-10.66H50.8A10.59 10.59 0 0 1 58.34 14a10.94 10.94 0 0 1 1.43 1.79H49.21a21.57 21.57 0 0 0-20.92 16.4h-6.76a10.67 10.67 0 0 1-10.66-10.66zm39.92 10.66H39.86a10.68 10.68 0 0 1 9.35-5.54h10.93a10.67 10.67 0 0 1-9.35 5.54zM100 37.31a21.53 21.53 0 0 0-21.53-21.53h-6.92A21.53 21.53 0 0 0 50.8 0H21.54a21.53 21.53 0 0 0 0 43.06h6.83v-.31A21.41 21.41 0 0 0 34 52.53a21.4 21.4 0 0 0 15.2 6.31h29.26A21.56 21.56 0 0 0 100 37.31z"></path></symbol><symbol id="icon-logo-star" viewBox="0 0 362.62 388.52"><title>icon-logo-star</title><path d="M156.58 239l-88.3 64.75c-10.59 7.06-18.84 11.77-29.43 11.77-21.19 0-38.85-18.84-38.85-40 0-17.69 14.13-30.64 27.08-36.52l103.6-44.74-103.6-45.92C13 142.46 0 129.51 0 111.85 0 90.66 18.84 73 40 73c10.6 0 17.66 3.53 28.25 11.77l88.3 64.75-11.74-104.78C141.28 20 157.76 0 181.31 0s40 18.84 36.5 43.56L206 149.52l88.3-64.75C304.93 76.53 313.17 73 323.77 73a39.2 39.2 0 0 1 38.85 38.85c0 18.84-12.95 30.61-27.08 36.5l-103.61 45.91L335.54 239c14.13 5.88 27.08 18.83 27.08 37.67 0 21.19-18.84 38.85-40 38.85-9.42 0-17.66-4.71-28.26-11.77L206 239l11.77 104.78c3.53 24.72-12.95 44.74-36.5 44.74s-40-18.84-36.5-43.56z"></path></symbol><symbol id="icon-menu" viewBox="0 0 100 68.42"><title>icon-menu</title><path d="M94.73 10.53H5.27c-7 0-7-10.53 0-10.53h89.46c6.88.14 6.88 10.38 0 10.53zm0 18.42H5.27c-7 0-7 10.53 0 10.53h89.46c6.86-.17 6.86-10.38 0-10.53zm0 28.94H5.27c-7 0-7 10.53 0 10.53h89.46c7.03 0 7.03-10.53 0-10.53z" data-name="Layer 1"></path></symbol><symbol id="icon-nav-almanac" viewBox="0 0 64 64"><path fill="none" d="M7 1h46v62H7z"></path><path fill="none" vector-effect="non-scaling-stroke" d="M15 63V2M20 15h28M20 21h28"></path></symbol><symbol id="icon-nav-forums" viewBox="0 0 64 64"><path d="M10 15h44v2H10zM10 25h44v2H10zM10 35h44v2H10z"></path><path d="M17 61.174L32.37 48H64V4H0v44h17v13.174zM2 46V6h60v40H31.63L19 56.826V46H2z"></path></symbol><symbol id="icon-nav-gallery" viewBox="0 0 64 64"><path d="M0 54h64V10H0v44zm2-2v-4.544l21.952-19.09 12.156 12.156 6.051-8.068L62 49.459V52H2zm60-40v34.826l-20.16-17.28-5.949 7.932-11.843-11.844L2 44.805V12h60z"></path><path d="M51 28c3.309 0 6-2.691 6-6s-2.691-6-6-6-6 2.691-6 6 2.691 6 6 6zm0-10c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z"></path></symbol><symbol id="icon-nav-guide" viewBox="0 0 64 56.9"><title>icon-nav-guide</title><path d="M1 55.45l21-8 20 8 21-8v-46l-21 8-20-8-21 8v46zM22 1.45v46M42 9.45v46"></path></symbol><symbol id="icon-nav-home" viewBox="0 0 64 64"><path d="M32 3L2 33h9v30h12V47h16v16h12V33h11z"></path></symbol><symbol id="icon-nav-jobs" viewBox="0 0 64 64"><path d="M41 37.586L23.414 20l12-12-5.305-5.302-.688.486c-.025.018-2.537 1.769-5.671 1.769-2.244 0-4.277-.896-6.043-2.66L17 1.586-.414 19 12 31.414l10-10L39.586 39l-3 3L57 62.414 64.414 55 44 34.586l-3 3zM2.414 19L17.026 4.388c1.983 1.703 4.241 2.565 6.724 2.565 2.722 0 4.992-1.057 6.103-1.687L32.586 8 12 28.586 2.414 19zM57 59.586L39.414 42 44 37.414 61.586 55 57 59.586z"></path></symbol><symbol id="icon-nav-newsletter" viewBox="0 0 64 64"><path d="M64 12H0v39h64V12zm-4.395 2L32 31.81 4.395 14h55.21zM2 49V14.835L32 34.19l30-19.355V49H2z"></path></symbol><symbol id="icon-nav-shop" viewBox="0 0 64 64"><path d="M44 18h10v45H10V18h10z"></path><path d="M22 24V11c0-5.523 4.477-10 10-10s10 4.477 10 10v13"></path></symbol><symbol id="icon-nav-snippets" viewBox="0 0 64 64"><path d="M0 64h64.414L0-.414V64zm2-9h6v-2H2v-6h4v-2H2v-6h6v-2H2v-6h4v-2H2v-6h6v-2H2V4.414L59.586 62H2v-7z"></path><path d="M13 27.586V55h27.414L13 27.586zm2 4.828L35.586 53H15V32.414zM64.375 46.375l-2.472-9.886L25-.414 17.586 7l36.903 36.903 9.886 2.472zm-2.75-2.75l-6.114-1.528L26.414 13 31 8.414l29.097 29.097 1.528 6.114zM25 2.414L29.586 7 25 11.586 20.414 7 25 2.414z"></path></symbol><symbol id="icon-nav-video" viewBox="0 0 64 64"><path d="M46 30l17-10v32L46 42v10H1V20h45zM6 28h4M14 28h4"></path><path d="M7 36h18v10H7zM6 12h26l8 8"></path></symbol><symbol id="icon-search" viewBox="0 0 100 100"><title>icon-search</title><path d="M80.65 66.78a33.55 33.55 0 0 1-47.44-47.44 33.55 33.55 0 1 1 47.44 47.44zm6.73-54.16a43.06 43.06 0 0 0-65.32 55.71L2 88.39A6.8 6.8 0 0 0 11.61 98l20.06-20.06a43.06 43.06 0 0 0 55.71-65.32z"></path></symbol><symbol id="icon-star" viewBox="0 0 100 95.52"><title>icon-star</title><path d="M64.19 28.77a5.17 5.17 0 0 0 3.9 2.83s29.27-3 31.74 4.61-23 22.39-23 22.39a5.17 5.17 0 0 0-1.49 4.58s11.91 26.9 5.42 31.61S52.4 79.87 52.4 79.87a5.21 5.21 0 0 0-2.41-.6 5.14 5.14 0 0 0-2.41.6S25.68 99.5 19.2 94.79s5.42-31.61 5.42-31.61a5.18 5.18 0 0 0-1.49-4.58S-2.31 43.83.17 36.21s31.74-4.61 31.74-4.61a5.19 5.19 0 0 0 3.9-2.83S42 0 50 0s14.19 28.77 14.19 28.77z" data-name="Layer 1"></path></symbol><symbol id="icon-tag" viewBox="0 0 100 99.98"><title>icon-tag</title><path d="M42 42a10.07 10.07 0 1 1 0-14.24A10 10 0 0 1 42 42zm56 6.5l-43.74-44a7.19 7.19 0 0 0-5-2.25L8 0a7.55 7.55 0 0 0-8 7v1l2.5 41a7.11 7.11 0 0 0 2.25 4.75l43.49 44a7.2 7.2 0 0 0 5.24 2.25 6.81 6.81 0 0 0 5.25-2.25L97.72 59A7.47 7.47 0 0 0 98 48.5z"></path></symbol></svg>
  	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type="text/javascript">
/* <![CDATA[ */
var bblpAJAX = {"ajaxurl":"https:\/\/css-tricks.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script src="./css/scripts.min.js "></script>
<script src="./css/jquery.blockUI.min.js "></script>
<script src="./css/js.cookie.min.js "></script>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script src="./css/woocommerce.min.js "></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_ac04a06435d2f1633e6c4a3b9a22b897","fragment_name":"wc_fragments_ac04a06435d2f1633e6c4a3b9a22b897"};
/* ]]> */
</script>
<script src="./css/cart-fragments.min.js "></script>
<script type="text/javascript">
/* <![CDATA[ */
var pollsL10n = {"ajax_url":"https:\/\/css-tricks.com\/wp-admin\/admin-ajax.php","text_wait":"Your last request is still being processed. Please wait a while ...","text_valid":"Please choose a valid poll answer.","text_multiple":"Maximum number of choices allowed: ","show_loading":"0","show_fading":"1"};
/* ]]> */
</script>
<script src="./css/polls-js.js "></script>
<script type="text/javascript">
/* <![CDATA[ */
var markdownify = {"ajax_url":"\/wp-admin\/admin-ajax.php","nonce":"c2bf6638f6"};
/* ]]> */
</script>
<script src="./css/markdownify.js "></script>
<script src="./css/search-widget.js "></script>
<script src="./css/wp-embed.min.js "></script>
<script type="text/javascript" src="./css/e-201822.js " async="async" defer="defer"></script>
<script type="text/javascript">
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:6.1',blog:'45537868',post:'4906',tz:'-7',srv:'css-tricks.com'} ]);
	_stq.push([ 'clickTrackerInit', '45537868', '4906' ]);
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
    <script>var __should_toggle_comments = false;</script>
  
<script src="./css/global-min.js "></script>

<script async="" src="./css/ei.js "></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(function(){
    setInterval(function(){ // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที
        // 1 วินาที่ เท่า 1000
        // คำสั่งที่ต้องการให้ทำงาน ทุก ๆ 3 วินาที
        var getData=$.ajax({ // ใช้ ajax ด้วย jQuery ดึงข้อมูลจากฐานข้อมูล
                url:"gdata.php",
                data:"rev=1",
                async:false,
                success:function(getData){
                    $("div#showData").html(getData); // ส่วนที่ 3 นำข้อมูลมาแสดง
                }
        }).responseText;
    },3000);    
});
</script>






<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-68528-29', 'auto');
  ga('send', 'pageview');
</script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<img src="./css/g.gif" alt=":)" width="6" height="5" id="wpstats"><iframe scrolling="no" frameborder="0" allowtransparency="true" src="./css/widget_iframe.ef2c8913b9245291df4f0101c0de2cf8.html" title="Twitter settings iframe" style="display: none;"></iframe><iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;" title="Twitter analytics iframe" src="./css/saved_resource.html"></iframe></body></html>