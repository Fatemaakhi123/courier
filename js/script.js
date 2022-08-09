
function prev(){
    document.getElementById('slide-container').scrollLeft -= 270;
}

function next()
{
    document.getElementById('slide-container').scrollLeft += 270;
}


$(".sli img").on("click" , function(){
$(this).toggleClass('zoomed');

})
