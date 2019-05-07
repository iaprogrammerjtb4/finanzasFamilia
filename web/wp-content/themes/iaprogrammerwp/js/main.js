$(function(){
	if($('#home').length){OBJ_HOME.INIT();}
});

var OBJ_HOME = {
	INIT:function(){		
		var tamanos = this.LOGIC.diseno();
		this.VIEWS.acomodarTamano(tamanos);
	},
	EVENTS:function(){
		
	},
	LOGIC:{		
		diseno:function(){
			var tamano = new Array();
			tamano['ancho'] = screen.width;
			tamano['alto'] = screen.height;
			return tamano;
		}
	},
	VIEWS:{
		acomodarTamano:function(tama){
			var ancho = tama.ancho -5;
			$('.div1').css('width',ancho+'px');
			$('.div1').css('height',tama.alto+'px');
		}
	}
} 