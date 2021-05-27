var miAuto = new Object();
miAuto.marca = "ford";
miAuto.modelo = "mustang";
miAuto.anio = 1969;

/* prueba sliders */

var slider      = document.getElementById('slider');
var sliderWidht = document.getElementsByClassName('slide')[0].offsetWidth;
var buttonLeft  = document.getElementsByClassName('button-left')[0];
var buttonRight = document.getElementsByClassName('button-right')[0];

if (slider && sliderWidht && buttonLeft && buttonRight){
    buttonLeft.addEventListener( 'click', function){
        if (slider.scrollLeft % sliderWidht != 0)
            slider.scrollLeft -= slider.scrollLeft % sliderWidht;
        else
            slider.scrollLeft -= sliderWidht;
    }
};