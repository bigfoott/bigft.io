<?php
    if ($page == NULL)
    {
        header('Location: https://bigft.io/art/');
    }
    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/Parsedown.php';
    $info = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/art/'.$page.'/info.json'));
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="/images/favicon.png">
	
	<title>Anthony - <?= $info->name; ?></title>
	
	<meta content="Bigft.io" property="og:site_name">
	<meta content="Anthony - <?= $info->name; ?>" property="og:title">
	<meta content="#c46be2" name="theme-color">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Anthony - <?= $info->name; ?>" />
	<meta name="twitter:image" content="https://bigft.io/art/<?= $page; ?>/banner.png" />
	<meta name="og:image" content="https://bigft.io/art/<?= $page; ?>/banner.png" />
	<meta name="og:image:alt" content="<?= $info->name; ?>>" />
	
	<script src="https://kit.fontawesome.com/d16c543bf8.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
	<link rel="stylesheet" href="/assets/css/index.css">
	<link rel="stylesheet" href="/assets/css/art.css">
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.4.1/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide/dist/css/glide.theme.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=block" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=block" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=block" rel="stylesheet">
</head>
<body onload="onLoad(); artLoad();" style="min-height: 100vh;">
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-10 topbar-container view-page">
					<div class="topbar">
						<a class="is-size-5-tablet is-size-7-mobile is-back-button" href="/art"><i class="fas fa-arrow-left"></i> Back</a>
						<a class="is-size-5-tablet is-size-7-mobile" href="/">Home</a>
						<a class="is-size-5-tablet is-size-7-mobile" href="/portfolio">Portfolio</a>
						<a class="is-size-5-tablet is-size-7-mobile thispage" href="/art">Art</a>
					</div>
				</div>
			</div>
        </div>
        <div class="container" style="margin-top: 1em;">
            <div class="columns">
                <div class="column is-1 is-hidden-mobile"></div>
                <div class="column is-4">
                    <div class="art-desc">
                        <h1 class="title is-size-4-tablet is-size-5-mobile"><?= $info->name; ?></h1>
                        <div class="is-size-6-tablet is-size-7-mobile">
                            <?php
                                $Parsedown = new Parsedown();
                                $Parsedown->setBreaksEnabled(true);
                                echo $Parsedown->text($info->desc);
                            ?>
                        </div>
                        <a class="button is-size-6-tablet is-size-7-mobile thingiverse-button" href="<?= $info->thingiverse; ?>" target="_blank">
                            <span class="fa-stack">
                                <i class="far fa-stack-1x fa-circle" style="color: white; font-size: 1.25em;"></i>
                                <span class="fa-stack-1x no-select" style="color: white; font-size: 0.85em; font-family: 'Archivo Black';">T</span>
                            </span>
                            <b>Get on Thingiverse</b>
                        </a>
                    </div>
                </div>
                <div class="column is-7">
                    <div class="model-viewer-container">
                        <model-viewer src="/art/<?= $page; ?>/model.glb" auto-rotate camera-controls camera-target="0m -15m 0m" camera-orbit="45deg 30deg 175m" min-camera-orbit="-Infinity 0deg auto" max-camera-orbit="Infinity 60deg 175m" exposure="0.75"></model-viewer>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" style="background-color: var(--accent-background-color);">
        <div class="columns is-centered">
            <div class="column is-12">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <?php
                                $dirs = scandir($_SERVER['DOCUMENT_ROOT'].'/art/'.$page);
                                $count = 0;
                                for ($i = 2; $i < sizeof($dirs); $i++)
                                {
                                    if (substr($dirs[$i], -4) === ".png" && $dirs[$i] !== "banner.png")
                                    {
                                        $count++;
                                        echo '<li class="glide__slide art-slide"><img src="/art/'.$page.'/'.$dirs[$i].'" draggable="false"></li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
                    </div>
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <?php
                            for ($i = 0; $i < $count; $i++)
                            {
                                echo '<button class="glide__bullet" data-glide-dir="='.$i.'"></button>';
                            }
                        ?>
                      </div>
                </div>
                <!--<div id="carousel" class="carousel">
                    <?php
                        $dirs = scandir($_SERVER['DOCUMENT_ROOT'].'/art/'.$page);
                        $count = 0;
                        for ($i = 2; $i < sizeof($dirs); $i++)
                        {
                            if (substr($dirs[$i], -4) === ".png" && $dirs[$i] !== "banner.png")
                            {
                                $count++;
                                echo '<div class="item-'.$count.' no-select"><img src="/art/'.$page.'/'.$dirs[$i].'" draggable="false"></div>';
                            }
                        }
                    ?>
                </div>-->
            </div>
        </div>
    </section>
    <section class="section foot">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/index/footer.php'; ?>
    </section>

    <script src="https://unpkg.com/@glidejs/glide@3.4.1/dist/glide.min.js"></script>
    <script>
        var page = "<?= $page; ?>";
        var count = <?= $count ?>;
        new Glide('.glide', {
            type: 'carousel',
            autoplay: 5000,
            hoverpause: true,
            animationDuration: 750
        }).mount()
    </script>
    <script src="/assets/js/index.js"></script>
    <script src="/assets/js/art.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</body>
</html>