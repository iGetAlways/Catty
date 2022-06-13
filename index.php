<?php   

    $ip = 'mc.hypixel.net';
$url = 'https://api.bybilly.uk/api/players/'. $ip .'/25565';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; curl)");
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$json = curl_exec($ch);
	curl_close($ch);
	$jsonn  = json_decode($json, true);
$pcount = $jsonn['online'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Catty Earth</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta name="title" content="Catty Earth"> 
	<meta name="description"
		content="Catty - Dünya haritası ve krallıklar temalı minecraft sunucusu.">
	<meta name="keywords" content="Catty, Minecraft, server, sunucu, towny, kingdoms, dünya, harita, catty network, cattymc,">
	<meta name="language" content="TR_TR">
	<meta name="url" content="https://catty.earth">
	<meta name="og:title" content="Catty Earth" /> 
	<meta name="og:url" content="https://catty.earth" />
	<meta name="og:image" content="/assets/img/icon.png" />
	<meta name="og:description"
	content="Catty - Dünya haritası ve krallıklar temalı minecraft sunucusu.">
	<meta name="theme-color" content="#aa4444" />
	<meta name="og:color" content="#aa4444">

	<link rel="icon" type="image/png" href="/assets/img/favicon.ico">
	<link href="/assets/css/portal.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/d40f9ad946.js" crossorigin="anonymous"></script>

	<script src="/assets/js/minecraft.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>

</head>

<body>

	<div class="blur"></div>
	<section id="stars"></section>

	<div class="main">
		<div id="cont" class="container">
		<?php include('./parts/navbar.php'); ?>
			<div class="center">
				<img src="/assets/img/icon.png" id="logo">

			</div>



			
			<?php 
			
			if(isset($pcount) == true) {
				echo '<div class="copy tooltip" onclick="copyIp()" onmouseout="mouseLeave()">
				<p><span>&nbsp'. $pcount .'&nbsp</span> kişi <span>&nbsp'.$ip.'&nbsp</span>'."'". 'de aktif&nbsp<span class="tooltiptext" id="ip-click">Tıkla kopyala</span></p>
			</div>';
			} else {
				echo '<div class="copy tooltip" onclick="copyIp()" onmouseout="mouseLeave()">
				<p> Sunucu çevrimdışı <br><span>&nbsp'.$ip.'&nbsp</span><span class="tooltiptext" id="ip-click">Tıkla kopyala</span></p>
			</div>';
			}


			?>

			

			<div class="items">
				<a href="https://catty.earth/discord" class="item">
					<div>
						<i class="fab fa-discord icon"></i>
						<p class="title left">Discord</p>
					</div>
				</a>

				<a href="#" class="item">
					<div>
						<i class="fa-solid fa-map-location-dot icon"></i>
						<p class="title left">Harita</p>
					</div>
				</a>

				<a href="#" class="item">
					<div>
						<i class="fas fa-shopping-basket icon"></i>
						<p class="title right">Mağaza</p>
					</div>
				</a>




			</div>
		</div>
	</div>

	<script>
		const copyIp = () => {
			navigator.clipboard.writeText('catty.earth');
			document.getElementById('ip-click').innerHTML = 'Kopyalandı!';
		}

		const mouseLeave = () => {
			document.getElementById('ip-click').innerHTML = 'Tıkla kopyala';
		}


		function stars() {
        const count = 170;
        const stars = document.getElementById('stars');
        var i = 0;
        while(i < count) {
          const star = document.createElement('i');
          const x = Math.floor(Math.random() * window.innerWidth)
          const y = Math.floor(Math.random() * window.innerHeight)
          const size = Math.random() * 5;
          star.style.left = x+'px';
          star.style.top = y+'px';
          star.style.height = 1+size+'px';
          star.style.width = 1+size+'px';
          const duration = Math.random() * 2;
          star.style.animationDuration = 2+duration+'s';
          stars.appendChild(star);
          i++
        }
      }
      stars();


	</script>


</body>
</html>
