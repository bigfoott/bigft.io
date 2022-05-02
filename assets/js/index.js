function onLoad()
{
    setInterval(function(){
        document.getElementsByTagName("html")[0].style.scrollBehavior = "smooth";
    },50);

    if (window.location.pathname.endsWith("/"))
    {
        history.replaceState(null, document.title, window.location.pathname.substring(0, window.location.pathname.length - 1));
    }
}