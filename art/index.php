<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="/images/favicon.png">
	
	<title>Anthony - Art</title>
	
	<meta content="Bigft.io" property="og:site_name">
	<meta content="Anthony" property="og:title">
	<meta content="#9d49b9" name="theme-color">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Anthony" />
	
	<script src="https://kit.fontawesome.com/d16c543bf8.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
	<link rel="stylesheet" href="/assets/css/index.css">
	<link rel="stylesheet" href="/assets/css/art.css">

    <link href="/assets/css/bulma-carousel.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=block" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=block" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=block" rel="stylesheet">
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
					$all = json_decode(file_get_contents("order.json"));
					for ($i = 0; $i < sizeof($all); $i++)
					{
                        $info = json_decode(file_get_contents($all[$i]."/info.json"));
						echo '<div class="column is-5">
								<div class="is-art">
									<a href="'.$all[$i].'">
										<div class="art-banner"><img src="'.$all[$i].'/banner.png"></div>
									</a>
									<div class="art-banner-bottom">
										<h1 class="title is-size-5-tablet is-size-7-mobile">'.$info->name.'</h1>
										<div class="art-banner-buttons is-hidden-mobile">
											<a href="'.$all[$i].'" class="button is-small"><span class="fas fa-info-circle"></span></a>
											<a href="'.$info->thingiverse.'" target="_blank" class="button is-small">
												<span class="fa-stack">
													<i class="far fa-stack-1x fa-circle" style="font-size: 1.2em;"></i>
													<span class="fa-stack-1x no-select" style="font-size: 0.85em; font-family: \'Archivo Black\';">T</span>
												</span>
											</a>
										</div>
									</div>
								</div>
                            </div>';
					}
				?>
                <div class="column is-5">

                </div>
            </div>
        </div>
    </section>
    <section class="section foot">

    </section>

    <script src="/assets/js/index.js"></script>
</body>
</html>