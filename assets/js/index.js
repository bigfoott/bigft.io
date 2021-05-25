function onLoad()
{
    setInterval(function(){
        document.getElementsByTagName("html")[0].style.scrollBehavior = "smooth";
    },50);
}