document.body.onload = function(){
    setTimeout(function(){
        var prealoader = document.getElementById('site-preloader');
        if(!prealoader.classList.contains('done'))
        {
            prealoader.classList.add('done');
        }
    },500)
}