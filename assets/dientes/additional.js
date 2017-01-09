var l,
    s,
    s2,
    sup = new Array(),
    inf = new Array(),
    csup = new Array(),
    cinf = new Array(),
    corona = new Array(),
    implante = new Array(),
    puente = new Array(),
    removible = new Array();

var colors ={
    "estetica":{
        "color1": "#239bd9",
        "color2": "#d9edf7"
    },
    "metal":{
        "color1": "#2e9a44",
        "color2": "#d7e9dd"
    },
    "removible":{
        "color1": "#f0961e",
        "color2": "#eda958"
    },
    "implantes":{
        "color1": "#8e5cad",
        "color2": "#9a83aa"
    },
    "ferula":{
        "color1": "#354591",
        "color2": "#b2b2f9"
    },
    "virtual":{
        "color1": "#f9ae5d",
        "color2": "#f9d8b4"
    },
    "impresion":{
        "color1": "#aacf38",
        "color2": "#dcef8e"
    },
    "zfx":{
        "color1": "#6b6b6b",
        "color2": "#d3d3d3"
    }
}
var color = colors.estetica.color1;   
var white = "#ffffff";
var black = "#000000";
var type;
var superior = new Array("#d18", "#d17", "#d16", "#d15", "#d14", "#d13", "#d12", "#d11", "#d21", "#d22", "#d23", "#d24", "#d25", "#d26", "#d27", "#d28");
var inferior = new Array("#d48", "#d47", "#d46", "#d45", "#d44","#d43","#d42","#d41","#d31","#d32","#d33","#d34","#d35","#d36","#d37","#d38");

var circle_sup = new Array("#c16","#c17","#c18","#c19","#c20","#c21","#c22","#c23","#c24","#c25","#c26","#c27","#c28","#c29","#c30");
var circle_inf = new Array("#c1","#c2","#c3","#c4","#c5","#c6","#c7","#c8","#c9","#c10","#c11","#c12","#c13","#c14","#c15");

var dientes = new Array();
var dir_superior = new Array("#d18", "#d17", "#d16", "#d15", "#d14", "#d13", "#d12", "#d11", "#d21", "#d22", "#d23", "#d24", "#d25", "#d26", "#d27", "#d28");
var dir_inferior = new Array("#d48", "#d47", "#d46", "#d45", "#d44","#d43","#d42","#d41","#d31","#d32","#d33","#d34","#d35","#d36","#d37","#d38");


function set_puente(diente,puente,fill){
	console.log(puente);
	console.log(fill);
	if(puente){
		switch(fill){
			case colors.estetica.color1:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
			case colors.estetica.color2:
				diente.attr({fill: white});
                diente.attr({stroke: black});
			break;
			/*METAL*/
			case colors.metal.color1:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
			case colors.metal.color2:
				diente.attr({fill: white});
                diente.attr({stroke: black});
			break;
			/*IMPLANTES*/
			case colors.implantes.color1:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
			case colors.implantes.color2:
				diente.attr({fill: white});
                diente.attr({stroke: black});
			break;
			/*ZFX*/
			case colors.zfx.color1:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
			case colors.zfx.color2:
				diente.attr({fill: white});
                diente.attr({stroke: black});
			break;
			/*DEFAULT*/
			case white:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
		}
	}else{
		switch(fill){
			case colors.estetica.color1:
				diente.attr({fill: white});
                diente.attr({stroke: black});
			break;
			case colors.estetica.color2:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
			/*METAL*/
			case colors.metal.color1:
				diente.attr({fill: white});
                diente.attr({stroke: black});
			break;
			case colors.metal.color2:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
			/*IMPLANTES*/
			case colors.implantes.color1:
				diente.attr({fill: white});
                diente.attr({stroke: black});
			break;
			case colors.implantes.color2:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
			/*ZFX*/
			case colors.zfx.color1:
				diente.attr({fill: white});
                diente.attr({stroke: black});
			break;
			case colors.zfx.color2:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
			/*DEFAULT*/
			case white:
				diente.attr({fill: color});
                diente.attr({stroke: color});
			break;
		}
	}
}
function set_removible(diente,removible,fill){
	console.log(removible);
	console.log(fill);
	if(removible){
		switch(fill){
			case colors.removible.color1:
				diente.attr({fill: colors.removible.color2});
                diente.attr({stroke: colors.removible.color2});
			break;
			case colors.removible.color2:
				diente.attr({fill: colors.removible.color1});
                diente.attr({stroke: colors.removible.color1});
			break;
			/*FERULA*/
			case colors.ferula.color1:
				diente.attr({fill: colors.ferula.color2});
                diente.attr({stroke: colors.ferula.color2});
			break;
			case colors.ferula.color2:
				diente.attr({fill: colors.ferula.color1});
                diente.attr({stroke: colors.ferula.color1});
			break;
			/*VIRTUAL*/
			case colors.virtual.color1:
				diente.attr({fill: colors.virtual.color2});
                diente.attr({stroke: colors.virtual.color2});
			break;
			case colors.virtual.color2:
				diente.attr({fill: colors.virtual.color1});
                diente.attr({stroke: colors.virtual.color1});
			break;
			/*IMPRESION*/
			case colors.impresion.color1:
				diente.attr({fill: colors.impresion.color2});
                diente.attr({stroke: colors.impresion.color2});
			break;
			case colors.impresion.color2:
				diente.attr({fill: colors.impresion.color1});
                diente.attr({stroke: colors.impresion.color1});
			break;
		}
	}else{
		alert("Debe activar el botón para seleccionar los dientes");
	}
}
function set_paint_circle(diente,fill){
	switch(fill){
		case white:
			diente.attr({fill: black});
            diente.attr({stroke: black});
		break;
		case black:
			diente.attr({fill: white});
            diente.attr({stroke: black});
		break;
	}
}
function set_clear_circle(){
	for(var i = 0; i<circle_sup.length; i++){
        csup[i].attr({fill:"#FFFFFF"});
        csup[i].attr({stroke: "#000000"});

    }
    for(var i = 0; i<circle_inf.length; i++){
        cinf[i].attr({fill:"#FFFFFF"});
        cinf[i].attr({stroke: "#000000"});
    }
}
function get_hex(rgb){
    var a = rgb.split("(")[1].split(")")[0];
    a = a.split(",");
    var b = a.map(function(x){             //For each array element
        x = parseInt(x).toString(16);      //Convert to a base16 string
        return (x.length==1) ? "0"+x : x;  //Add zero if we get only one character
    });
    b = "#"+b.join("");
    return b;
}
function convert_boolean(str){ 
	if(str == "true"){
		return true;
	}else{
		return false;
	}
}
function set_type(type){
    for(var i = 0; i<superior.length; i++){  
        sup[i].attr({"data-type":type});
    }
    
    for(var i = 0; i<inferior.length; i++){  
        inf[i].attr({"data-type":type});
    }
}
function set_clear_dientes(){
	for(var i = 0; i<superior.length; i++){
        sup[i].attr({fill:"#FFFFFF"});
        sup[i].attr({stroke: "#000000"});
        sup[i].attr({"data-puente":"false"});

    }
    for(var i = 0; i<inferior.length; i++){
        inf[i].attr({fill:"#FFFFFF"});
        inf[i].attr({stroke: "#000000"});
        inf[i].attr({"data-puente":"false"}); 
    } 	
}
function set_hide_circle(){
	for(var i = 0; i<circle_sup.length; i++){
        csup[i].attr({"display":"none"});
    }
    for(var i = 0; i<circle_inf.length; i++){
        cinf[i].attr({"display":"none"});
    } 
}
function set_show_circle(){
	for(var i = 0; i<circle_sup.length; i++){
        csup[i].attr({"display":"block"});
    }
    for(var i = 0; i<circle_inf.length; i++){
        cinf[i].attr({"display":"block"});
    } 	
}
function set_removible_default(fill,stroke){
    for(var i = 0; i<superior.length; i++){
        sup[i].attr({fill: fill});
        sup[i].attr({stroke: stroke});
        sup[i].attr({"data-removible":"true"});
    }
    for(var i = 0; i<inferior.length; i++){
        inf[i].attr({fill:"#FFFFFF"});
        inf[i].attr({stroke: "#000000"});
    }
}

function set_label(diente){
	var value = diente.attr("id").split("d");
    var index = dientes.indexOf(value[1]);
    
    if(diente.attr("data-type") == "2" || diente.attr("data-type") == "5" || diente.attr("data-type")=="3" || diente.attr("data-type")=="4"){
    	if (index >= 0) {
	        dientes.splice( index, 1 );
	    }else{
	        dientes.push(value[1]);
	    }
        $("#dientes_label").text("");
        $("#dientes_label").append(dientes.join( "," ));                
    }else if((diente.attr("data-type") == "8" || diente.attr("data-type") == "12" || diente.attr("data-type") == "6" || diente.attr("data-type") == "7" ) && (diente.attr("data-removible-down")=="true" || diente.attr("data-removible")=="true")){
        if (index >= 0) {
	        dientes.splice( index, 1 );
	    }else{
	        dientes.push(value[1]);
	    }
        $("#dientes_label").text("");
        $("#dientes_label").append(dientes.join( "," ));  
    }
}

/*FUNCIONES EXTERIORES*/
function paint_tooth(type,dientes){    
    var array = dientes.split(',');
    var color_set;
    for(var i = 0; i<array.length; i++){
        d = s2.select(array[i]);
        color_set = select_color(type);
        d.attr({fill:color_set});
        d.attr({stroke:"#FFFFFF" });
    }
}
function paint_hover_tooth(type,dientes,direccion){
	var array = dientes.split(',');
	for(var i = 0; i<array.length; i++){
		if(direccion == 0){
			var index = dir_superior.indexOf(array[i]);
			if(index >= 0){
				dir_superior.splice(index,1);
			}
		}else{
			var index = dir_inferior.indexOf(array[i]);
			if(index >= 0){
				dir_inferior.splice(index,1);
			}
		}
	}
	if(direccion == 0){
		if(type=="8" || type=="12" || type=="7" || type=="6"){
			tooth_removibles_up(select_color(type));
			for(var i = 0; i<superior.length; i++){
				d = s2.select(superior[i]);
				//set_removible(d,true,select_color(type))
				d.attr({fill:select_color(type)});
				d.attr({stroke:select_color(type)});
			}
			for(var i = 0; i<array.length; i++){
				d = s2.select(array[i]);
				d.attr({fill:select_color2(type)});
			}
			for(var i = 0; i<inferior.length; i++){
				d = s2.select(inferior[i]);
				d.attr({'fill-opacity':'0.4'});
			}
		}else{
			for(var i = 0; i<dir_superior.length; i++){
				d = s2.select(dir_superior[i]);
				d.attr({'fill-opacity':'0.4'});
			}
			for(var i = 0; i<array.length; i++){
				d = s2.select(array[i]);
				d.attr({fill:select_color(type)});
			}
		}
		for(var i = 0; i<array.length; i++){
			dir_superior.push(array[i]);
		}
	}else{
		if(type=="8" || type=="12" || type=="7" || type=="6"){
			tooth_removibles_down(select_color(type));
			for(var i = 0; i<inferior.length; i++){
				console.log("entre 8");
				d = s2.select(inferior[i]);
				//set_removible(d,true,select_color(type))
				d.attr({fill:select_color(type)});
				d.attr({stroke:select_color(type)});
			}
			for(var i = 0; i<array.length; i++){
				d = s2.select(array[i]);
				d.attr({fill:select_color2(type)});
			}
			for(var i = 0; i<superior.length; i++){
				d = s2.select(superior[i]);
				d.attr({'fill-opacity':'0.4'});
			}
		}else{
			for(var i = 0; i<dir_inferior.length; i++){
				d = s2.select(dir_inferior[i]);
				d.attr({'fill-opacity':'0.4'});
			}
			for(var i = 0; i<array.length; i++){
				d = s2.select(array[i]);
				d.attr({fill:select_color(type)});
			}
		}
		for(var i = 0; i<array.length; i++){
			dir_inferior.push(array[i]);
		}
	}
}
function select_color(type){	
    switch(type){
        case "2"://ESTETICA
            set_color = colors.estetica.color1;
        break;
        case "5"://METAL
            set_color = colors.metal.color1;
        break;
        case "8"://REMOVIBLE
            set_color = colors.removible.color1;
        break;
        case "3"://IMPLANTE
            set_color = colors.implantes.color1;
        break;
        case "12"://FERULA
            set_color = colors.ferula.color1;
        break;
        case "7"://VIRTUAL
            set_color = colors.virtual.color1;
        break;
        case "6"://IMPRESION 3D
            set_color = colors.impresion.color1;
        break;
        case "4"://ZFX
            set_color = colors.zfx.color1;
        break;
    }
    return set_color;
}
function select_color2(type){	
    switch(type){
        case "8"://REMOVIBLE
            set_color = colors.removible.color2;
        break;
        case "12"://FERULA
            set_color = colors.ferula.color2;
        break;
        case "7"://VIRTUAL
            set_color = colors.virtual.color2;
        break;
        case "6"://IMPRESION 3D
            set_color = colors.impresion.color2;
        break;
    }
    return set_color;
}
function dientes_todos(type){
	if(type=="8" || type=="12" || type=="7" || type=="6"){
		set_clear_dientes2();
		modelo_todos();
	}else{
		for(var i = 0; i<superior.length; i++){  
	        d = s2.select(superior[i]); 
	        d.attr({'fill-opacity':'1'});
	    }
	    for(var i = 0; i<inferior.length; i++){  
	        d = s2.select(inferior[i]);  
	        d.attr({'fill-opacity':'1'});
	    }
	}
}
function set_clear_dientes2(){
	for(var i = 0; i<superior.length; i++){
		d = s2.select(superior[i]);
        d.attr({fill:"#FFFFFF"});
        d.attr({stroke: "#000000"});
    }
    for(var i = 0; i<inferior.length; i++){
    	d = s2.select(inferior[i]);
        d.attr({fill:"#FFFFFF"});
        d.attr({stroke: "#000000"});
    } 	
}

/*REMOVIBLE*/
function clear_tooth_up(){
    for(var i = 0; i<superior.length; i++){
        sup[i].attr({fill: white});
        sup[i].attr({stroke: black});          
    }
}
function clear_tooth_down(){
    for(var i = 0; i<inferior.length; i++){
        inf[i].attr({fill: white});
        inf[i].attr({stroke: black});
    }    
}
function tooth_removibles_up(color){
    for(var i = 0; i<superior.length; i++){
        sup[i].attr({fill: color});
        sup[i].attr({stroke: color});         
    }
}
function tooth_removibles_down(color){
    for(var i = 0; i<inferior.length; i++){
        inf[i].attr({fill: color});
        inf[i].attr({stroke: color});
    }
}