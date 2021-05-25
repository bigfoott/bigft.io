<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="/images/favicon.png">
	
	<title>Anthony</title>
	
	<meta content="Bigft.io" property="og:site_name">
	<meta content="Anthony" property="og:title">
	<meta content="#9d49b9" name="theme-color">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Anthony" />
	
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
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">1</span>VR Speedrunning</h1>
                    <p class="tags-list">
                        <span class="tag is-small csharp">C#</span>
                        <span class="tag is-small htmlcss">HTML/CSS</span>
                        <span class="tag is-small js">JS</span>
                        <span class="tag is-small php">PHP</span>
                    </p>
                    <p>VR Speedrunning is a central hub to view the leaderboards for the top VR speedgames.</p>
                    <p>Along with the website, there is a <a href="https://twitter.com/VRSpeedruns">Twitter bot</a> that posts new world records, and a Discord bot for the <a href="https://discord.gg/7PKWZuW">VR Speedrunning Discord server</a>.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="/vrsr">Site</a>
                        <a class="button is-small" target="_blank" href="https://github.com/bigfoott/VRSR">Repo<i class="fas fa-external-link-alt"></i></a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">2</span>VR Laser Game</h1>
                    <p class="tags-list">
                        <span class="tag is-small csharp">C#</span>
                    </p>
                    <p>VR Laser Game is a work in progress puzzle game in VR using <a href="https://unity.com/">Unity</a> that i've been iterating on for a few years.</p>
                    <p class="links">
                        <a class="button is-small disabled" disabled>Site</a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">3</span>BigftioBot</h1>
                    <p class="tags-list">
                        <span class="tag is-small csharp">C#</span>
                                <span class="tag is-small htmlcss">HTML/CSS</span>
                                <span class="tag is-small js">JS</span>
                                <span class="tag is-small php">PHP</span>
                    </p>
                    <p>BigftioBot is a <a href="https://twitch.tv">Twitch</a> chat bot. Features include custom commands, quotes, moderation tools, and more.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="/bot">Site</a>
                        <a class="button is-small" target="_blank" href="https://github.com/bigfoott/BigftioBot">Repo<i class="fas fa-external-link-alt"></i></a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">4</span>URBot</h1>
                    <p class="tags-list">
                        <span class="tag is-small csharp">C#</span>
                        <span class="tag is-small htmlcss">HTML/CSS</span>
                    </p>
                    <p>URBot is a <a href="https://support.discordapp.com/hc/en-us/articles/360040720412-Bot-Verification-and-Data-Whitelisting#h_46b3869c-6d50-43fc-b07c-9ed7569a1160">verified</a> <a href="https://discordapp.com">Discord</a> bot made for the roleplaying web show <a href="https://urealms.com">URealms</a>.</p>
                    <p>I stopped maintaining this bot in October 2019, however for now the bot is still active and can be added to new servers.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="/urbot">Site</a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">5</span>TalosVR SR</h1>
                    <p class="tags-list">
                        <span class="tag is-small htmlcss">HTML/CSS</span>
                    </p>
                    <p>Talos VR Speedrunning Resource is a site that hosts useful strats and tricks for <a href="https://store.steampowered.com/app/552440/The_Talos_Principle_VR/">The Talos Principle VR</a> speedruns.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="/talosvr">Site</a>
                        <a class="button is-small" target="_blank" href="https://github.com/bigfoott/TalosVRSRResource">Repo<i class="fas fa-external-link-alt"></i></a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">6</span>BBot V2</h1>
                    <p class="tags-list">
                        <span class="tag is-small csharp">C#</span>
                    </p>
                    <p>BBot V2 is an open source rewrite of my general purpose <a href="https://discordapp.com">Discord</a> bot.</p>
                    <p>It can't be added to public servers, however the source is available on Github.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="https://github.com/bigfoott/BBotV2">Repo<i class="fas fa-external-link-alt"></i></a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">7</span>FCDisplay</h1>
                    <p class="tags-list">
                        <span class="tag is-small csharp">C#</span>
                    </p>
                    <p>FCDisplay was a mod for <a href="https://beatsaber.com/">Beat Saber</a> that added a visual element to the game when the user hasn't missed a note.</p>
                    <p>I stopped maintaining the mod when an official version of this feature was added to the game.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="https://github.com/bigfoott/FCDisplay">Repo<i class="fas fa-external-link-alt"></i></a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">8</span>ImmersiveMode</h1>
                    <p class="tags-listt">
                        <span class="tag is-small csharp">C#</span>
                    </p>
                    <p>ImmersiveMode was a mod for <a href="https://beatsaber.com/">Beat Saber</a> that disabled all UI while in a song, either just in-headset, just in the mirror, or both.</p>
                    <p>I stopped maintaining the mod when an official version of this feature was added to the game.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="https://github.com/bigfoott/ImmersiveMode">Repo<i class="fas fa-external-link-alt"></i></a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num">9</span>StreamInfo</h1>
                    <p class="tags-list">
                        <span class="tag is-small csharp">C#</span>
                        <span class="tag is-small htmlcss">HTML/CSS</span>
                    </p>
                    <p>StreamInfo was a mod for <a href="https://beatsaber.com/">Beat Saber</a> that allowed players to display game info as an overlay on their streams or videos.</p>
                    <p>I stopped maintaining the mod when an official version of this feature was added to the game.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="https://bigft.io/streaminfo">Site</a>
                        <a class="button is-small" target="_blank" href="https://github.com/bigfoott/BeatSaberStreamInfo">Repo<i class="fas fa-external-link-alt"></i></a>
                    </p>
                </div>
                <div class="column is-5 project">
                    <h1 class="title is-size-4-tablet is-size-5-mobile"><span class="num-2">10</span>BBot</h1>
                    <p class="tags-list">
                        <span class="tag is-small csharp">C#</span>
                        <span class="tag is-small htmlcss">HTML/CSS</span>
                    </p>
                    <p>BBot is my first real attempt at making a <a href="https://discordapp.com">Discord</a> bot.</p>
                    <p class="links">
                        <a class="button is-small" target="_blank" href="/bbot">Site</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section foot">

    </section>

    <script src="/assets/js/index.js"></script>
</body>
</html>