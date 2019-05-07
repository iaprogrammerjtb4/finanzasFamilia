// JavaScript Document
function generarpanel(){
$(function(){
	var vista = '';
	$.each(serviceList,function(f,g){
        vista += '<form name="servicef_'+f+'" action="#">';
			vista += '<div class="bloqueServ" style="background-color:'+g.color+';">';
					vista += '<div>';
						vista += '<b>'+g.nombre+'</b>';
					vista += '</div>';			
					vista += '<div>';
						vista += g.descripcion;
					vista += '</div>';
					vista += '<div>';
						vista += ''+BASE_URL+g.url+'';
					vista += '</div>';												
				$.each(g.campos,function(b,c){	
					vista += '<div class="bloque">';
						vista += '<div>';
							vista += c.nombre;
						vista += '</div>';
						vista += '<div>';
							vista += '<input type="text" name="'+c.nombre+'" value="'+c.valor+'" /> '+c.info;
						vista += '</div>';
					vista += '</div>';
				})
				vista += '<div class="opciones">';
					vista += '<input type="button" name="enviar" value="Enviar" to="'+g.url+'" form="servicef_'+f+'">';
					vista += '<input type="button" name="clear" value="Clear" form="servicef_'+f+'">';
				vista += '</div>';
				vista += '<div class="resultado">';
				vista += '</div>';
			vista += '</div>';
		vista += '</form>';
	})
	
	$('#Panel').html(vista);
	
	
	$('body').on('click','[name=enviar]',function(){

		var url  = $(this).attr('to');
		var form =  $(this).attr('form');
		var datos = {};
		
		datos['token'] = TOKEN;
		
		$.each($('[name='+form+'] input[type=text]'),function(b,c){	
			var valName= $(c).val();
			var nameCamp= $(c).attr('name');
			datos[nameCamp] = valName;	
		})
		$('.resultado',$('[name='+form+']')).html('');
			
			console.log(BASE_URL);
			console.log(url);
			
			$.ajax({
				url: BASE_URL+url,
				type: "POST",
				dataType: "json",
				data: datos,
				success: function(data) {
					//$('.resultado',$('[name='+form+']')).html(''+JSON.stringify(data));
					$('.resultado',$('[name='+form+']')).html( '<pre>'+dump(data,'none')+'</pre>' );
					
				},
				error: function(e){
					$('.resultado',$('[name='+form+']')).html(e.responseText);
				}
		});		
	})
	
	$('body').on('dblclick','input',function(){
			$(this).val("");
	});
	$('body').on('click','[name=clear]',function(){
		var form =  $(this).attr('form');
		$('[name='+form+'] .resultado').html("");
	});	
})
}




function repeatString(str, num) {
    out = '';
    for (var i = 0; i < num; i++) {
        out += str; 
    }
    return out;
}


function dump(v, howDisplay, recursionLevel) {
    howDisplay = (typeof howDisplay === 'undefined') ? "alert" : howDisplay;
    recursionLevel = (typeof recursionLevel !== 'number') ? 0 : recursionLevel;


    var vType = typeof v;
    var out = vType;

    switch (vType) {
        case "number":
            /* there is absolutely no way in JS to distinguish 2 from 2.0
            so 'number' is the best that you can do. The following doesn't work:
            var er = /^[0-9]+$/;
            if (!isNaN(v) && v % 1 === 0 && er.test(3.0))
                out = 'int';*/
        case "boolean":
            out += ": " + v;
            break;
        case "string":
            out += "(" + v.length + '): "' + v + '"';
            break;
        case "object":
            //check if null
            if (v === null) {
                out = "null";

            }
            //If using jQuery: if ($.isArray(v))
            //If using IE: if (isArray(v))
            //this should work for all browsers according to the ECMAScript standard:
            else if (Object.prototype.toString.call(v) === '[object Array]') {  
                out = 'array(' + v.length + '): {\n';
                for (var i = 0; i < v.length; i++) {
                    out += repeatString('   ', recursionLevel) + "   [" + i + "]:  " + 
                        dump(v[i], "none", recursionLevel + 1) + "\n";
                }
                out += repeatString('   ', recursionLevel) + "}";
            }
            else { //if object    
                sContents = "{\n";
                cnt = 0;
                for (var member in v) {
                    //No way to know the original data type of member, since JS
                    //always converts it to a string and no other way to parse objects.
                    sContents += repeatString('   ', recursionLevel) + "   " + member +
                        ":  " + dump(v[member], "none", recursionLevel + 1) + "\n";
                    cnt++;
                }
                sContents += repeatString('   ', recursionLevel) + "}";
                out += "(" + cnt + "): " + sContents;
            }
            break;
    }

    if (howDisplay == 'body') {
        var pre = document.createElement('pre');
        pre.innerHTML = out;
        document.body.appendChild(pre)
    }
    else if (howDisplay == 'alert') {
        alert(out);
    }

    return out;
}