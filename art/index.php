<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="/images/fav_light.png">
	<link rel="icon" href="/images/fav_dark.png" media="(prefers-color-scheme:dark)">
	
	<title>Art - Anthony</title>
	
	<meta content="Bigft.io" property="og:site_name">
	<meta content="Art - Anthony" property="og:title">
	<meta content="#894FC8" name="theme-color">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Art - Anthony" />
	
	<link href="/assets/fa/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/bulma.min.css">
	<link rel="stylesheet" href="/assets/css/index.css">
	<link rel="stylesheet" href="/assets/css/art.css">

	<link rel="stylesheet" href="/assets/css/googlefonts.css">
</head>
<body onload="onLoad();">
    <section class="section section-cols" style="min-height: 100vh;">
		<div class="container">
            <div class="columns is-centered">
				<div class="column is-10 topbar-container">
					<div class="topbar">
						<a class="is-size-5-tablet is-size-7-mobile" href="/">Home</a>
						<a class="is-size-5-tablet is-size-7-mobile" href="/portfolio">Portfolio</a>
						<a class="is-size-5-tablet is-size-7-mobile thispage" href="/art">Art</a>
					</div>
				</div>
			</div>
        </div>
        <div class="container">
            <div class="columns is-centered is-multiline mobile-side-padding">
                <?php
					$artOrder = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT']."/art/order.json"));
					for ($i = 0; $i < sizeof($artOrder); $i++)
					{
                        $info = json_decode(file_get_contents($artOrder[$i]."/info.json"));
				?>
				<div class="column is-5">
					<div class="is-art">
						<a href="<?= $artOrder[$i] ?>">
							<div class="art-banner"><img src="<?= $artOrder[$i] ?>/banner.png"></div>
						</a>
						<div class="art-banner-bottom">
							<h1 class="title is-size-5-tablet is-size-7-mobile"><?= $info->name ?></h1>
							<div class="art-banner-buttons is-hidden-mobile">
								<a href="<?= $artOrder[$i] ?>" class="button is-small"><span class="fas fa-info-circle"></span></a>
								<a href="<?= $info->thingiverse ?>" target="_blank" class="button is-small">
									<span class="fa-stack">
										<i class="far fa-stack-1x fa-circle" style="font-size: 1.2em;"></i>
										<span class="fa-stack-1x no-select" style="font-size: 0.85em; font-family: 'Archivo Black';">T</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
            </div>
        </div>
    </section>
    <section class="section foot">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php'; ?>
    </section>

    <script src="/assets/js/index.js"></script>
</body>
</html>