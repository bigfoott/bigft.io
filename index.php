 <?php ?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="/images/fav_light.png">
	<link rel="icon" href="/images/fav_dark.png" media="(prefers-color-scheme:dark)">
	
	<title>Anthony</title>
	
	<meta content="Bigft.io" property="og:site_name">
	<meta content="Anthony" property="og:title">
	<meta content="#894FC8" name="theme-color">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Anthony" />
	<meta name="twitter:image" content="https://bigft.io/images/me.jpg" />
	<meta name="og:image" content="https://bigft.io/images/me.jpg" />
	<meta name="og:image:alt" content="Anthony" />
	<meta name="og:description" content="Hello! I'm Anthony, a software dev from New Jersey with a Bachelor's in Computer Science and an interest in web dev and virtual reality." />
	<meta name="twitter:description" content="Hello! I'm Anthony, a software dev from New Jersey with a Bachelor's in Computer Science and an interest in web dev and virtual reality." />
	
	<link href="/assets/fa/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/bulma.min.css">
	<link rel="stylesheet" href="/assets/css/index.css">

    <link rel="stylesheet" href="/assets/css/googlefonts.css">
</head>
<body onload="onLoad();">
    <section class="section" style="height: 100vh;">
        <div class="columns is-vcentered">
            <div class="column is-12">
                <div class="container">
                    <div class="columns is-vcentered is-centered">
                        <div class="column is-2 is-hidden-tablet is-centered">
                            <figure class="image is-128x128" style="margin: auto;">
                                <img class="is-rounded no-select" src="/images/me.jpg">
                            </figure>
                            <div class="mobile-icons">
                                <a class="fa-stack" target="_blank" href="https://github.com/bigfoott">
                                    <i class="fas fa-stack-2x fa-square"></i>
                                    <i class="fab fa-stack-1x fa-github" style="color: white;"></i>
                                </a>
                                <!--<a class="fa-stack" target="_blank" href="https://twitter.com/bigfoootttt">
                                    <i class="fas fa-stack-2x fa-square"></i>
                                    <i class="fab fa-stack-1x fa-twitter" style="color: white;"></i>
                                </a>-->
                                <a class="fa-stack" target="_blank" href="https://www.thingiverse.com/bigfoott">
                                    <i class="fas fa-stack-2x fa-square"></i>
                                    <i class="far fa-stack-1x fa-circle" style="color: white; font-size: 1.25em;"></i>
                                    <span class="fa-stack-1x no-select" style="color: white; font-size: 0.85em; font-family: 'Archivo Black';">T</span>
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="bio">
                                <p>Hello! I'm <b>Anthony</b>, a software dev from New Jersey with a Bachelor's in Computer Science and an interest in web dev and virtual reality.</p>
                                <p>View my <a href="/portfolio">programming portfolio</a> or check out some of the <a href="/art">3D printed art</a> I've made!</p>
                            </div>
                        </div>
                        <div class="column is-2 is-hidden-mobile" style="margin-left: 3em;">
                            <figure class="image is-200x200">
                                <img class="is-rounded no-select" src="/images/me.jpg">
                                <div class="icons">
                                    <div class="icon one">
                                        <a class="fa-stack" id="icon-github" target="_blank" href="https://github.com/bigfoott">
                                            <i class="fas fa-stack-2x fa-square"></i>
                                            <i class="fab fa-stack-1x fa-github" style="color: white;"></i>
                                        </a>
                                    </div>
                                    <!--<div class="icon two">
                                        <a class="fa-stack" id="icon-twitter" target="_blank" href="https://twitter.com/bigfoootttt">
                                            <i class="fas fa-stack-2x fa-square"></i>
                                            <i class="fab fa-stack-1x fa-twitter" style="color: white;"></i>
                                        </a>
                                    </div>-->
                                    <div class="icon three">
                                        <a class="fa-stack" id="icon-thingiverse" target="_blank" href="https://www.thingiverse.com/bigfoott">
                                            <i class="fas fa-stack-2x fa-square"></i>
                                            <i class="far fa-stack-1x fa-circle" style="color: white; font-size: 1.25em;"></i>
                                            <span class="fa-stack-1x no-select" style="color: white; font-size: 0.85em; font-family: 'Archivo Black';">T</span>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/assets/js/index.js"></script>
    <script type="text/javascript" src="/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="/assets/js/tippy-bundle.umd.js"></script> 
    <script>
            var group = [];
            group[0] = tippy('#icon-github', {
                content: 'GitHub'
            })[0];
            group[1] = /*tippy('#icon-twitter', {
                content: 'Twitter'
            })[0];
            group[2] = */tippy('#icon-thingiverse', {
                content: 'Thingiverse'
            })[0];

            tippy.createSingleton(group, {
                delay: [0, 75],
                moveTransition: 'transform 0.175s ease-out',
                theme: 'main',
                placement: 'left'
            });
    </script>
    <style>::-webkit-scrollbar{width:0px;}</style>
</body>
</html>