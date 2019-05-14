/*Home*/
var home = $('.iaprogrammerHome');
var pantallaAncho = screen.width;
var pantallaAlto = screen.height;
var homeAncho = pantallaAncho-20;
var homeAlto = (85*pantallaAlto/100);
home.css('width', homeAncho+'px');
home.css('height', homeAlto+'px');

//form
var formAlto = (65*pantallaAlto/100);
var formMargenAlta = (10*formAlto/100);
$('.iaprogrammerHomeForm').css('height', formAlto+'px');
$('.iaprogrammerHomeForm').css('margin-top', formMargenAlta+'px');
