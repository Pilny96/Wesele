
 $('#main').click(function(){
        document.getElementById("My_Navbar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)"
        event.stopPropagation();
});


const $menu = $('#main');
$(document).mouseup(e => {
       if(!$menu.is(e.target) && $menu.has(e.target).length === 0) 
       {
       document.getElementById("My_Navbar").style.width = "0";
       document.getElementById("main").style.marginLeft = "0";
       document.body.style.backgroundColor = "white";
       }
});