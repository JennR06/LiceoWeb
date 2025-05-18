//Mostrar u cultar el boton al hacer scroll
window.onscroll = function() {
    const btn = document.getElementById("btnArriba");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btn.style.display = "block";
    }
    else { 
        btn.style.display = "none";
    }
};

// Volver al inicio al hacer click en el boton
document.getElementById("btnArriba").addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
