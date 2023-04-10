
$(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        
        $('.filter').show('1000');
    }
    else
    {
      
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});




let navlinks = document.querySelectorAll('.nav-link')

for(let i=0;i<navlinks.length;i++)
{
    '/'+navlinks[i].getAttribute('href') == window.location.pathname ? navlinks[i].style.color='#2354cd' : ''
}


