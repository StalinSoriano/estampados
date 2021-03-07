$(document).ready(function(){
    

if(document.getElementById('btnRegistrar')!=null)
{
    var btnRegistrar = document.getElementById('btnRegistrar');
    btnRegistrar.addEventListener('click',function(){
        $('#modelRegistrarCuenta').modal('show');
        
    });
}
/*
if(document.getElementById('carrito1')!=null)
{
    var carrito = document.getElementById('carrito1');
    carrito.addEventListener('click',function(){
        $('#modalCarrito').modal('show');
    });
}
if(document.getElementById('carrito2')!=null)
{
   
var carrito2 = document.getElementById('carrito2');
carrito2.addEventListener('click',function(){
   $('#modalCarrito').modal('show');
 
});
}
if(document.getElementById('carrito3')!=null)
{
    var carrito3 = document.getElementById('carrito3');
    carrito3.addEventListener('click',function(){
        
        $('#modalCarrito').modal('show');
      
    });
}*/


});

/*====Expander Menú===*/
const showMenu=(toggleId,navbarId,bodyId)=>{
    const toggle=document.getElementById(toggleId),
    navbar =document.getElementById(navbarId),
    bodypadding=document.getElementById(bodyId)
    if(toggle && navbar){
      toggle.addEventListener('click',()=>{
        navbar.classList.toggle('expander2')
        bodypadding.classList.toggle('body-pd2')
      })
    }
  }
  
  showMenu('nav-toggle2','navbar2','body-pd2')
  
  /*===Link Active===*/
  const linkColor=document.querySelectorAll('.nav_link2')
  function colorLink(){
    linkColor.forEach(l => l.classList.remove('active2'))
    this.classList.add('active2')
  }
  linkColor.forEach(l=>l.addEventListener('click',colorLink))
  
  /*===Collapse Menu===*/
  const linkCollapse=document.getElementsByClassName('collapse_link2')
  var i
  
  for(i=0;i<linkCollapse.length;i++){
    linkCollapse[i].addEventListener('click',function(){
      const collapseMenu=this.nextElementSibling
      collapseMenu.classList.toggle('showCollapse2')
  
      const rotate= collapseMenu.previousElementSibling
      rotate.classList.toggle('rotate2')
    })
  }