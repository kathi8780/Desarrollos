var l,
    s,
    sup = new Array(),
    inf = new Array(),
    corona = new Array(),
    implante = new Array(),
    puente = new Array(),
    removible = new Array(),
    color = "#239bd9";

var colors ={
    "estetica":{
        "color1": "#239bd9",
        "color2": "#d9edf7"
    },
    "metal":{
        "color1": "",
        "color2": ""
    },
    "removible":{
        "color1": "",
        "color2": ""
    },
    "implantes":{
        "color1": "",
        "color2": ""
    },
    "ferula":{
        "color1": "",
        "color2": ""
    },
    "virtual":{
        "color1": "",
        "color2": ""
    },
    "impresion":{
        "color1": "",
        "color2": ""
    },
    "zfx":{
        "color1": "",
        "color2": ""
    }
}    

var superior = new Array("#d18", "#d17", "#d16", "#d15", "#d14", "#d13", "#d12", "#d11", "#d21", "#d22", "#d23", "#d24", "#d25", "#d26", "#d27", "#d28");
var inferior = new Array("#d48", "#d47", "#d46", "#d45", "#d44","#d43","#d42","#d41","#d31","#d32","#d33","#d34","#d35","#d36","#d37","#d38");
var dientes = new Array();

$(document).ready(function(){ 
    s = Snap("#svgload");
    s2 = Snap("#svgload2");
    for(var i = 0; i<superior.length; i++){  
        sup[i] = s.select(superior[i]); 
    }
    
    for(var i = 0; i<inferior.length; i++){  
        inf[i] = s.select(inferior[i]);  
    }

    for(var i = 0; i<superior.length; i++){  
        sup[i].click(function () {
            switch(this.attr("data-type")){
                case "2"://1-ESTETICA
                    console.log("entre");
                    var get_color = rgb2hex(this.attr("fill"));
                    console.log("color"+get_color);
                    if(this.attr("data-puente")=="true"){
                        if(this.attr("fill")=="rgb(255, 255, 255)"){//BLANCO
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill") == "rgb(35, 155, 217)"){//AZUL OSCURO
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill") == "rgb(217, 237, 247)"){//AZUL CLARO
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});   
                        }   
                    }else{
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill") == "rgb(35, 155, 217)"){//AZUL OSCURO
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }else if(this.attr("fill") == "rgb(217, 237, 247)"){ //AZUL CLARO
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});   
                        }
                    }    
                break;
                case "5"://2-METAL
                    if(this.attr("data-puente")=="true"){
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill")=="rgb(215, 233, 221)"){
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"}); 
                        }else if(this.attr("fill")=="rgb(46, 154, 68)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"}); 
                        }
                    }else{
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill")=="rgb(46, 154, 68)"){
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }else if(this.attr("fill")=="rgb(215, 233, 221)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }
                    }
                    /*if(this.attr("fill")=="rgb(255, 255, 255)"){
                        this.attr({fill: color});
                        this.attr({stroke: color});
                    }else{
                        this.attr({fill: "#FFFFFF"});
                        this.attr({stroke: "#000000"});
                    }*/
                break;
                case "8"://3-REMOVIBLE
                    if(this.attr("data-removible")=="true"){
                        if(this.attr("fill") == "rgb(240, 150, 30)"){
                            this.attr({fill: color});
                            this.attr({stroke: "#f0961e"});
                        }else{
                            this.attr({fill: "#f0961e"});
                            this.attr({stroke: "#fad4a6"});
                        }
                    }    
                break;
                case "3"://4-IMPLANTE
                    if(this.attr("data-puente")=="true"){
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill")=="rgb(239, 224, 247)"){
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"}); 
                        }else if(this.attr("fill")=="rgb(118, 81, 160)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"}); 
                        }
                    }else{
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill")=="rgb(118, 81, 160)"){
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }else if(this.attr("fill")=="rgb(239, 224, 247)"){
                            console.log(color);
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }
                    }
                break;
                case "12"://5-FERULA
                    if(this.attr("data-removible")=="true"){
                        if(this.attr("fill") == "rgb(50, 45, 173)"){
                            this.attr({fill: color});
                            this.attr({stroke: "#322dad"});
                        }else{
                            this.attr({fill: "#322dad"});
                            this.attr({stroke: "#322dad"});
                        }
                    }
                break;
                case "7"://6-VIRTUAL
                    if(this.attr("data-removible")=="true"){
                        if(this.attr("fill") == "rgb(50, 45, 173)"){
                            this.attr({fill: color});
                            this.attr({stroke: "#322dad"});
                        }else{
                            this.attr({fill: "#322dad"});
                            this.attr({stroke: "#322dad"});
                        }
                    }
                break;
                case "6"://7-IMPRESION 3D
                
                break;
                case "4"://8-ZFX
                    if(this.attr("data-puente")=="true"){
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill")=="rgb(204, 204, 204)"){
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"}); 
                        }else if(this.attr("fill")=="rgb(98, 97, 99)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"}); 
                        }
                    }else{
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill")=="rgb(98, 97, 99)"){
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }else if(this.attr("fill")=="rgb(204, 204, 204)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }
                    }
                break;
                
            }
            var value = this.attr("id").split("d");
            var index = dientes.indexOf(value[1]);
            
            if (index >= 0) {
                dientes.splice( index, 1 );
            }else{
                dientes.push(value[1]);
            }
            if(this.attr("data-type") == "1" || this.attr("data-type") == "2" || this.attr("data-type")=="3" || this.attr("data-type")=="8"){
                $("#dientes_label").text("");
                $("#dientes_label").append(dientes.join( "," ));                
            }else if(this.attr("data-type") == "4" && this.attr("data-removible")=="true"){
                $("#dientes_label").text("");
                $("#dientes_label").append(dientes.join( "," ));  
            }
        });
    }

    for(var i = 0; i<inferior.length; i++){  
        inf[i].click(function () {
            switch(this.attr("data-type")){
                case "1":
                    if(this.attr("fill")=="rgb(255, 255, 255)"){
                        this.attr({fill: color});
                        this.attr({stroke: color});
                        corona.push(this.attr("id"));
                    }else {
                        this.attr({fill: "#FFFFFF"});
                        this.attr({stroke: "#000000"});
                    }    
                break;
                case "2":
                    if(this.attr("fill")=="rgb(255, 255, 255)"){
                        this.attr({fill: color});
                        this.attr({stroke: color});
                    }else{
                        this.attr({fill: "#FFFFFF"});
                        this.attr({stroke: "#000000"});
                    }
                break;
                case "3":
                    if(this.attr("data-puente")=="true"){
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill")=="rgb(215, 233, 221)"){
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"}); 
                        }else if(this.attr("fill")=="rgb(46, 154, 68)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"}); 
                        }
                    }else{
                        if(this.attr("fill")=="rgb(255, 255, 255)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else if(this.attr("fill")=="rgb(46, 154, 68)"){
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }else if(this.attr("fill")=="rgb(215, 233, 221)"){
                            this.attr({fill: color});
                            this.attr({stroke: color});
                        }else{
                            this.attr({fill: "#FFFFFF"});
                            this.attr({stroke: "#000000"});
                        }
                    }
                break;
                case "4":
                    if(this.attr("data-removible-down")=="true"){
                        if(this.attr("fill") == "rgb(240, 150, 30)"){
                            this.attr({fill: color});
                            this.attr({stroke: "#322dad"});
                        }else{
                            this.attr({fill: "#322dad"});
                            this.attr({stroke: "#322dad"});
                        }
                    }
                break;
            }
            var value = this.attr("id").split("d");
            var index = dientes.indexOf(value[1]);
            if (index >= 0) {
                dientes.splice( index, 1 );
            }else{
                dientes.push(value[1]);
            }
            if(this.attr("data-type") == "1" || this.attr("data-type") == "2" || this.attr("data-type")=="3"){
                $("#dientes_label").text("");
                $("#dientes_label").append(dientes.join( "," ));                
            }else if(this.attr("data-type") == "4" && this.attr("data-removible-down")=="true"){
                $("#dientes_label").text("");
                $("#dientes_label").append(dientes.join( "," ));  
            }

        });
    }

    $("#btn-corona").click(function(e) {
        dientes = [];
        color = "#239bd9";
        clear_tooth();   
        change_type(2);
        $("#op_1").css("background","#239bd9");
        $("#op_2").css("background","#d9edf7");

        $("#text_001").show();
        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");

        $(this).removeClass("corona_off").addClass("corona_on");
        $("#btn_puente2").removeClass("puente_op_on").addClass("puente_op_off"); 
        
        $("#removible").removeClass("removible_on").addClass("removible_off");
        $("#puente").removeClass("puente_on").addClass("puente_off");
        $("#implante").removeClass("implante_on").addClass("implante_off");
    });
    $("#btn-implant").click(function(e) {
        dientes = [];
        color = "#7651a0";
        clear_tooth();  
        change_type(3);
        $("#op_1").css("background","#7651a0");
        $("#op_2").css("background","#EFE0F7");

        $("#text_001").show();
        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");

        $(this).removeClass("implante_off").addClass("implante_on");
        $("#btn_puente2").removeClass("puente_op_on").addClass("puente_op_off"); 

        $("#removible").removeClass("removible_on").addClass("removible_off");  
        $("#puente").removeClass("puente_on").addClass("puente_off"); 
        $("#corona").removeClass("corona_on").addClass("corona_off");    
    });
    $("#btn-puente").click(function(e) {
        dientes = [];
        color = "#2e9a44";
        clear_tooth();
        change_type(5);        
        $("#op_1").css("background","#2e9a44");
        $("#op_2").css("background","#d7e9dd");
        
        $("#text_001").show();
        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");
        
        $(this).removeClass("puente_off").addClass("puente_on");
        $("#btn_puente2").removeClass("puente_op_on").addClass("puente_op_off"); 
        
        $("#removible").removeClass("removible_on").addClass("removible_off");
        $("#implante").removeClass("implante_on").addClass("implante_off");
        $("#corona").removeClass("corona_on").addClass("corona_off"); 
    });

    $("#btn-removible").click(function(e) {
        dientes = [];
        color = select_color(8);
        clear_tooth();
        change_type(8);
        set_removible("#f0961e","#f0961e");

        $("#text_001").hide();
        $("#op_removible").show();
        $("#op_puente").hide();
        $("#dientes_label").text("");
        $(".color_txt label").css("color","#fad4a6");

        $("#up_rmv").removeClass("rmv_off").addClass("rmv_on");
        $(this).removeClass("removible_off").addClass("removible_on");
        $("#puente").removeClass("puente_on").addClass("puente_off");
        $("#implante").removeClass("implante_on").addClass("implante_off");
        $("#corona").removeClass("corona_on").addClass("corona_off"); 
    });  
    $("#btn-appliance").click(function(e) {//FERULA
        dientes = [];
        color = select_color(12);
        clear_tooth();
        change_type(12);
        set_removible("#322dad","#322dad");

        $("#text_001").hide();
        $("#op_removible").show();
        $("#op_puente").hide();
        $("#dientes_label").text("");
        $(".color_txt label").css("color","#322dad");
        

        $("#up_rmv").removeClass("rmv_off").addClass("rmv_on");
        $(this).removeClass("removible_off").addClass("removible_on");
        $("#puente").removeClass("puente_on").addClass("puente_off");
        $("#implante").removeClass("implante_on").addClass("implante_off");
        $("#corona").removeClass("corona_on").addClass("corona_off"); 
    });
    $("#btn-protesis").click(function(e) {//VIRTUAL
        dientes = [];
        color = select_color(7);
        clear_tooth();
        change_type(7);
        set_removible("#d29459","#d29459");

        $("#text_001").hide();
        $("#op_removible").show();
        $("#op_puente").hide();
        $("#dientes_label").text("");
        $(".color_txt label").css("color","#322dad");
        

        $("#up_rmv").removeClass("rmv_off").addClass("rmv_on");
        $(this).removeClass("removible_off").addClass("removible_on");
        $("#puente").removeClass("puente_on").addClass("puente_off");
        $("#implante").removeClass("implante_on").addClass("implante_off");
        $("#corona").removeClass("corona_on").addClass("corona_off"); 
    });  

    
    $("#btn-zfx").click(function(e) {
        dientes = [];
        color = select_color(4);
        clear_tooth();  
        change_type(4);
        $("#op_1").css("background","#626163");
        $("#op_2").css("background","#cccccc");

        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");

        $(this).removeClass("implante_off").addClass("implante_on");
        $("#btn_puente2").removeClass("puente_op_on").addClass("puente_op_off"); 

        $("#removible").removeClass("removible_on").addClass("removible_off");  
        $("#puente").removeClass("puente_on").addClass("puente_off"); 
        $("#corona").removeClass("corona_on").addClass("corona_off");    
    });

    $("#btn_puente2").click(function(e) {
        if(sup[0].attr("data-puente")=="true"){
            for(var i = 0; i<superior.length; i++){  
                sup[i].attr({"data-puente":"false"});
            }
            for(var i = 0; i<inferior.length; i++){  
                inf[i].attr({"data-puente":"false"});  
            }
            switch(sup[0].attr("data-type")){
                case "2":
                    color = "#239bd9";                
                break;
                case "5":
                    color = "#2e9a44";
                break;
                case "3":
                    color = "#7651a0";                
                break;
                case "4":
                    color = "#626163";                
                break;
            }
            $(this).removeClass("puente_op_on").addClass("puente_op_off"); 
        }else{
            for(var i = 0; i<superior.length; i++){  
                sup[i].attr({"data-puente":"true"});
            }
            for(var i = 0; i<inferior.length; i++){  
                inf[i].attr({"data-puente":"true"});  
            }
            switch(inf[0].attr("data-type")){
                case "2":
                    color = "#d9edf7";                
                break;
                case "5":
                    color = "#d7e9dd";
                break;
                case "3":
                    color = "#efe0F7";                
                break;
                case "4":
                    color = "#cccccc";                
                break;
            }
            $(this).removeClass("puente_op_off").addClass("puente_op_on"); 
        }
    });

    $("#up_rmv").click(function(e) {
        switch(sup[0].attr("data-type")){
            case "8":
                color = "#ffb476";
                color2 = "#f0961e";
            break;
            case "12":
                color = "#adabe5";
                color2 = "#322dad";
            break;
            case "":
            break;
            case "":
            break;
        } 
        
        if(sup[0].attr("data-removible")=="true"){
            $(this).removeClass("rmv_on").addClass("rmv_off"); 
            for(var i = 0; i<superior.length; i++){
                sup[i].attr({"data-removible":"false"}); 
            }
            //color = "#fad4a6";
            clear_tooth_up();
        }else{
            for(var i = 0; i<superior.length; i++){
                sup[i].attr({"data-removible":"true"}); 
            }
            $(this).removeClass("rmv_off").addClass("rmv_on");
            tooth_removibles_up(color2);
        }
        console.log(color);
    });
    $("#down_rmv").click(function(e) {
        if(inf[0].attr("data-removible-down")=="true"){
            $(this).removeClass("rmv_on").addClass("rmv_off"); 
            for(var i = 0; i<inferior.length; i++){
                inf[i].attr({"data-removible-down":"false"}); 
            }
            color = "#fad4a6";
            clear_tooth_down();
            //dientes.splice( index, 1 );
        }else{
            for(var i = 0; i<inferior.length; i++){
                inf[i].attr({"data-removible-down":"true"}); 
            }
            $(this).removeClass("rmv_off").addClass("rmv_on");
            tooth_removibles_down();
        }
    });


});

function rgb2hex(rgb){
    var a = rgb.split("(")[1].split(")")[0];
    a = a.split(",");
    var b = a.map(function(x){             //For each array element
        x = parseInt(x).toString(16);      //Convert to a base16 string
        return (x.length==1) ? "0"+x : x;  //Add zero if we get only one character
    });
    b = "#"+b.join("");
    return b;
}

function set_removible(fill,stroke){
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
function change_type(type){
    for(var i = 0; i<superior.length; i++){  
        sup[i].attr({"data-type":type});
    }
    
    for(var i = 0; i<inferior.length; i++){  
        inf[i].attr({"data-type":type});
    }
}
function clear_tooth(){
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
function clear_tooth_up(){
    for(var i = 0; i<superior.length; i++){
        sup[i].attr({fill:"#FFFFFF"});
        sup[i].attr({stroke: "#000000"});          
    }
}
function clear_tooth_down(){
    for(var i = 0; i<inferior.length; i++){
        inf[i].attr({fill:"#FFFFFF"});
        inf[i].attr({stroke: "#000000"});
    }    
}
function tooth_removibles_up(color){
    for(var i = 0; i<superior.length; i++){
        sup[i].attr({fill: color});//"#f0961e"
        sup[i].attr({stroke: color});//          
    }
}
function tooth_removibles_down(){
    for(var i = 0; i<inferior.length; i++){
        inf[i].attr({fill:"#f0961e"});
        inf[i].attr({stroke: "#f0961e"});
    }
}
function paint_tooth(type,dientes){
    var array = dientes.split(',');
    for(var i = 0; i<array.length; i++){
        d = s2.select(array[i]);
        d.attr({fill:select_color(type)});
        d.attr({stroke:"#FFFFFF" });          
    }   
}
function select_color(type){
    switch(type){
        case 2://ESTETICA
            color = "#239bd9";
        break;
        case 5://METAL
            color = "#7651a0";
        break;
        case 8://REMOVIBLE
            color = "#ffb476";
        break;
        case 3://IMPLANTE
            color = "#fad4a6";
        break;
        case 12://FERULA
            color = "#9d76ff";
        break;
        case 7://VIRTUAL
            color = "#E8410C";
        break;
        case 6://IMPRESION 3D
            color = "#fad4a6";
        break;
        case 4://ZFX
            color = "#626163";
        break;
    }
    console.log(color);
    return color;
}