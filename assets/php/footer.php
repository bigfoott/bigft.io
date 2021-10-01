<?php ?>

<a id="icon-github" class="fa-stack" target="_blank" href="https://github.com/bigfoott" title="GitHub">
    <i class="fas fa-stack-2x fa-square"></i>
    <i class="fab fa-stack-1x fa-github" style="color: white;"></i>
</a>
<a id="icon-twitter" class="fa-stack" target="_blank" href="https://twitter.com/bigfoootttt" title="Twitter">
    <i class="fas fa-stack-2x fa-square"></i>
    <i class="fab fa-stack-1x fa-twitter" style="color: white;"></i>
</a>
<a id="icon-thingiverse" class="fa-stack" target="_blank" href="https://www.thingiverse.com/bigfoott" title="Thingiverse">
    <i class="fas fa-stack-2x fa-square"></i>
    <i class="far fa-stack-1x fa-circle" style="color: white; font-size: 1.25em;"></i>
    <span class="fa-stack-1x no-select" style="color: white; font-size: 0.85em; font-family: 'Archivo Black';">T</span>
</a>

<p>© 2021 Anthony</p>

<script type="text/javascript" src="/assets/js/popper.min.js"></script>
<script type="text/javascript" src="/assets/js/tippy-bundle.umd.js"></script> 
<script>
    var group = [];
    group[0] = tippy('#icon-github', {
        content: 'GitHub'
    })[0];
    group[1] = tippy('#icon-twitter', {
        content: 'Twitter'
    })[0];
    group[2] = tippy('#icon-thingiverse', {
        content: 'Thingiverse'
    })[0];

    tippy.createSingleton(group, {
        delay: [0, 75],
        moveTransition: 'transform 0.175s ease-out',
        theme: 'main',
        placement: 'top'
    });
</script>