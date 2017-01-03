var l,
    s,
    sup = new Array(),
    inf = new Array(),
    corona = new Array(),
    implante = new Array(),
    puente = new Array(),
    removible = new Array(),
    color = "#239bd9";

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
                            this.attr({stroke: "#f0961e"});
                        }else{
                            this.attr({fill: "#f0961e"});
                            this.attr({stroke: "#fad4a6"});
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

        $("#op_puente").hide();
        $("#op_removible").hide();
        $("#dientes_label").text("");
        change_type(1);
        $(this).removeClass("corona_off").addClass("corona_on");
        $("#removible").removeClass("removible_on").addClass("removible_off");  
        $("#puente").removeClass("puente_on").addClass("puente_off"); 
        $("#implante").removeClass("implante_on").addClass("implante_off");      
    });
    $("#btn-implant").click(function(e) {
        dientes = [];
        color = "#7651a0";
        clear_tooth();  

        $("#op_puente").hide();
        $("#op_removible").hide();
        $("#dientes_label").text("");
        change_type(2);

        $(this).removeClass("implante_off").addClass("implante_on");
        $("#removible").removeClass("removible_on").addClass("removible_off");  
        $("#puente").removeClass("puente_on").addClass("puente_off"); 
        $("#corona").removeClass("corona_on").addClass("corona_off");    
    });
    $("#btn-puente").click(function(e) {
        dientes = [];
        color = "#2e9a44";
        clear_tooth();

        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");
        change_type(3);

        $("#btn_puente").removeClass("puente_op_on").addClass("puente_op_off"); 
        $(this).removeClass("puente_off").addClass("puente_on");
        $("#removible").removeClass("removible_on").addClass("removible_off");
        $("#implante").removeClass("implante_on").addClass("implante_off");
        $("#corona").removeClass("corona_on").addClass("corona_off"); 
    });
    $("#btn-removible").click(function(e) {
        dientes = [];
        color = "#fad4a6";
        clear_tooth();

        $("#op_removible").show();
        $("#op_puente").hide();
        $("#dientes_label").text("");
        change_type(4);

        $("#up_rmv").removeClass("rmv_off").addClass("rmv_on"); 

        for(var i = 0; i<superior.length; i++){
            sup[i].attr({fill:"#f0961e"});
            sup[i].attr({stroke: "#f0961e"});
            sup[i].attr({"data-removible":"true"});          
        }
        for(var i = 0; i<inferior.length; i++){
            inf[i].attr({fill:"#FFFFFF"});
            inf[i].attr({stroke: "#000000"});
        }

        $(this).removeClass("removible_off").addClass("removible_on");
        $("#puente").removeClass("puente_on").addClass("puente_off");
        $("#implante").removeClass("implante_on").addClass("implante_off");
        $("#corona").removeClass("corona_on").addClass("corona_off"); 
    });  
      
    $("#btn_puente").click(function(e) {
        if(sup[0].attr("data-puente")=="true"){
            for(var i = 0; i<superior.length; i++){  
                sup[i].attr({"data-puente":false});
            }
            for(var i = 0; i<inferior.length; i++){  
                inf[i].attr({"data-puente":false});  
            }
            color = "#2e9a44";
            $(this).removeClass("puente_op_on").addClass("puente_op_off"); 
        }else{
            for(var i = 0; i<superior.length; i++){  
                sup[i].attr({"data-puente":"true"});
            }
            for(var i = 0; i<inferior.length; i++){  
                inf[i].attr({"data-puente":true});  
            }
            color = "#d7e9dd";
            $(this).removeClass("puente_op_off").addClass("puente_op_on"); 
        }
    });

    $("#up_rmv").click(function(e) {
        if(sup[0].attr("data-removible")=="true"){
            $(this).removeClass("rmv_on").addClass("rmv_off"); 
            for(var i = 0; i<superior.length; i++){
                sup[i].attr({"data-removible":"false"}); 
            }
            color = "#fad4a6";
            clear_tooth_up();
        }else{
            for(var i = 0; i<superior.length; i++){
                sup[i].attr({"data-removible":"true"}); 
            }
            $(this).removeClass("rmv_off").addClass("rmv_on");
            tooth_removibles_up();
        }
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
function change_type(type){
    for(var i = 0; i<superior.length; i++){  
        sup[i].attr({"data-type":type});
    }
    
    for(var i = 0; i<inferior.length; i++){  
        inf[i].attr({"data-type":type});
    }
}
function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
function clear_tooth(){
    for(var i = 0; i<superior.length; i++){
        sup[i].attr({fill:"#FFFFFF"});
        sup[i].attr({stroke: "#000000"});          
    }
    for(var i = 0; i<inferior.length; i++){
        inf[i].attr({fill:"#FFFFFF"});
        inf[i].attr({stroke: "#000000"});
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
function tooth_removibles_up(){
    for(var i = 0; i<superior.length; i++){
        sup[i].attr({fill:"#f0961e"});
        sup[i].attr({stroke: "#f0961e"});          
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
        case 1:
            color = "#239bd9";
        break;
        case 2:
            color = "#7651a0";
        break;
        case 3:
            color = "#2e9a44";
        break;
        case 4:
            color = "#fad4a6";
        break;
    }
    return color;
}