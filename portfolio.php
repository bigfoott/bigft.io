<?php
    include $_SERVER['DOCUMENT_ROOT'].'/assets/php/Parsedown.php';
    $Parsedown = new Parsedown();
    $Parsedown->setBreaksEnabled(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="/images/favicon.png">
	
	<title>Anthony - Portfolio</title>
	
	<meta content="Bigft.io" property="og:site_name">
	<meta content="Anthony - Portfolio" property="og:title">
	<meta content="#c46be2" name="theme-color">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Anthony - Portfolio" />
	
	<script src="https://kit.fontawesome.com/d16c543bf8.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
	<link rel="stylesheet" href="/assets/css/index.css">

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
						<a class="is-size-5-tablet is-size-7-mobile thispage" href="/portfolio">Portfolio</a>
						<a class="is-size-5-tablet is-size-7-mobile" href="/art">Art</a>
					</div>
				</div>
			</div>
        </div>
        <div class="container">
            <div class="columns is-centered is-multiline mobile-side-padding">
                <?php
                    $portfolio = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/assets/other/portfolio.json'));

                    $languages = array(
                        'C#' => '<span class="tag is-small csharp">C#</span>',
                        'HTML/CSS' => '<span class="tag is-small htmlcss">HTML/CSS</span>',
                        'JS' => '<span class="tag is-small js">JS</span>',
                        'PHP' => '<span class="tag is-small php">PHP</span>'
                    );
                    for ($i = 0; $i < count($portfolio); $i++)
                    {
                        $num2 = '';
                        if ($i >= 9) $num2 = '-2';

                        echo '<div class="column is-5 project">
                                <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num'.$num2.'">'.($i + 1).'</span>'.$portfolio[$i]->name.'</h1>
                                <p class="tags-list">';
                        
                        for ($j = 0; $j < count($portfolio[$i]->languages); $j++)
                        {
                            echo $languages[$portfolio[$i]->languages[$j]];
                        }
                        
                        echo '</p>'.$Parsedown->text($portfolio[$i]->desc).'<p class="links">';
                        
                        for ($j = 0; $j < count($portfolio[$i]->links); $j++)
                        {
                            $external = '';
                            $disabled = '';
                            $href = 'href="'.$portfolio[$i]->links[$j]->link.'"';
                            if ($portfolio[$i]->links[$j]->external)
                            {
                                $external = '<i class="fas fa-external-link-alt"></i>';
                            }
                            if ($portfolio[$i]->links[$j]->disabled)
                            {
                                $disabled = ' disabled';
                                $href = '';
                            }

                            echo '<a class="button is-small'.$disabled.'" target="_blank" '.$href.''.$disabled.'>'.$portfolio[$i]->links[$j]->name.''.$external.'</a>';
                        }
                        
                        echo '</p></div>';
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="section foot">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/index/footer.php'; ?>
    </section>

    <script src="/assets/js/index.js"></script>
</body>
</html>