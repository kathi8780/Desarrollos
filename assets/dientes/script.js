$(document).ready(function(){ 
    s = Snap("#svgload");
    s2 = Snap("#svgload2");

    for(var i = 0; i<superior.length; i++){  
        sup[i] = s.select(superior[i]); 
    }
    
    for(var i = 0; i<inferior.length; i++){  
        inf[i] = s.select(inferior[i]);  
    }

    for(var i = 0; i<circle_sup.length; i++){  
        csup[i] = s.select(circle_sup[i]); 
    }
    
    for(var i = 0; i<circle_inf.length; i++){  
        cinf[i] = s.select(circle_inf[i]);  
    }

    /*SUPERIOR*/
    for(var i = 0; i<superior.length; i++){
        sup[i].click(function () {
            switch(this.attr("data-type")){
                case "2"://1-ESTETICA
                    set_puente(this,convert_boolean(this.attr("data-puente")),get_hex(this.attr("fill")));
                break;
                case "5":
                    set_puente(this,convert_boolean(this.attr("data-puente")),get_hex(this.attr("fill")));
                break;
                case "8":
                    set_removible(this,convert_boolean(this.attr("data-removible")),get_hex(this.attr("fill")));
                break;
                case "3":
                    set_puente(this,convert_boolean(this.attr("data-puente")),get_hex(this.attr("fill")));
                break;
                case "12"://FERULA
                    set_removible(this,convert_boolean(this.attr("data-removible")),get_hex(this.attr("fill")));
                break;
                case "7"://VIRTUAL
                    set_removible(this,convert_boolean(this.attr("data-removible")),get_hex(this.attr("fill")));
                break;
                case "6"://IMPRESION
                    set_removible(this,convert_boolean(this.attr("data-removible")),get_hex(this.attr("fill")));
                break;
                case "4":
                    set_puente(this,convert_boolean(this.attr("data-puente")),get_hex(this.attr("fill")));
                break;
            }
            set_label(this);
        });
    }
    for(var i = 0; i<circle_sup.length; i++){
        csup[i].click(function () {
            set_paint_circle(this,get_hex(this.attr("fill")));
        });
    }
    /*INFERIOR*/
    for(var i = 0; i<inferior.length; i++){
        inf[i].click(function () {
            switch(this.attr("data-type")){
                case "2"://1-ESTETICA
                    set_puente(this,convert_boolean(this.attr("data-puente")),get_hex(this.attr("fill")));
                break;
                case "5":
                    set_puente(this,convert_boolean(this.attr("data-puente")),get_hex(this.attr("fill")));
                break;
                case "8":
                    set_removible(this,convert_boolean(this.attr("data-removible-down")),get_hex(this.attr("fill")));
                break;
                case "3":
                    set_puente(this,convert_boolean(this.attr("data-puente")),get_hex(this.attr("fill")));
                break;
                case "12"://FERULA
                    set_removible(this,convert_boolean(this.attr("data-removible-down")),get_hex(this.attr("fill")));
                break;
                case "7"://VIRTUAL
                    set_removible(this,convert_boolean(this.attr("data-removible-down")),get_hex(this.attr("fill")));
                break;
                case "6"://IMPRESION
                    set_removible(this,convert_boolean(this.attr("data-removible-down")),get_hex(this.attr("fill")));
                break;
                case "4":
                    set_puente(this,convert_boolean(this.attr("data-puente")),get_hex(this.attr("fill")));
                break;
            }
            set_label(this);
        });
    }
    for(var i = 0; i<circle_inf.length; i++){
        cinf[i].click(function () {
            set_paint_circle(this,get_hex(this.attr("fill")));
        });
    }

    /*for(var i = 0; i<circle_inf.length; i++){
        cinf[i].click(function () {
            set_paint_circle(this,get_hex(this.attr("fill")));
        });
    }*/
    //console.log(colors.estetica.color1);

    /*FUNCION ONCLICK*/
    $("#btn-estetica").click(function(e) {
        dientes = [];
        set_clear_dientes();
        set_clear_circle();
        set_show_circle();
        set_type(2);
        color = colors.estetica.color1;
        $("#op_1").css("background",colors.estetica.color1);
        $("#op_2").css("background",colors.estetica.color2);

        $("#text_001").show();
        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");
        $("#btn_puente2").removeClass("puente_op_on").addClass("puente_op_off");
        type = 2;
    });

    $("#btn-metal").click(function(e) {
        dientes = [];
        set_clear_dientes();
        set_clear_circle();
        set_show_circle();
        set_type(5);
        color = colors.metal.color1;
        $("#op_1").css("background",colors.metal.color1);
        $("#op_2").css("background",colors.metal.color2);
        
        $("#text_001").show();
        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");
        $("#btn_puente2").removeClass("puente_op_on").addClass("puente_op_off");   
        type = 5;   
    });

    $("#btn-removible").click(function(e) {
        dientes = [];
        set_clear_dientes();
        set_clear_circle();
        set_hide_circle();
        set_type(8);
        color = colors.removible.color1;
        set_removible_default(colors.removible.color1,colors.removible.color1);

        $("#text_001").hide();
        $("#op_removible").show();
        $("#op_puente").hide();
        $("#dientes_label").text("");
        $("#up_rmv").removeClass("rmv_off").addClass("rmv_on");
        type = 8;
    });

    $("#btn-implant").click(function(e) {
        dientes = [];
        set_clear_dientes();
        set_clear_circle();
        set_show_circle();
        set_type(3);
        color = colors.implantes.color1;
        $("#op_1").css("background",colors.implantes.color1);
        $("#op_2").css("background",colors.implantes.color2);

        $("#text_001").show();
        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");
        $("#btn_puente2").removeClass("puente_op_on").addClass("puente_op_off"); 
        type = 3;
    });

    $("#btn-ferula").click(function(e) {//FERULA
        dientes = [];
        set_clear_dientes();
        set_clear_circle();
        set_hide_circle();
        set_type(12);
        color = colors.removible.color1;
        set_removible_default(colors.ferula.color1,colors.ferula.color1);

        $("#text_001").hide();
        $("#op_removible").show();
        $("#op_puente").hide();
        $("#dientes_label").text("");
        $("#up_rmv").removeClass("rmv_off").addClass("rmv_on");
        type = 12;
    });

    $("#btn-virtual").click(function(e) {//VIRTUAL
        dientes = [];
        set_clear_dientes();
        set_clear_circle();
        set_hide_circle();
        set_type(7);
        color = colors.virtual.color1;
        set_removible_default(colors.virtual.color1,colors.virtual.color1);

        $("#text_001").hide();
        $("#op_removible").show();
        $("#op_puente").hide();
        $("#dientes_label").text("");
        $("#up_rmv").removeClass("rmv_off").addClass("rmv_on");
        type = 7;
    });

    $("#btn-print").click(function(e) {//print
        dientes = [];
        set_clear_dientes();
        set_clear_circle();
        set_hide_circle();
        set_type(6);
        color = colors.impresion.color1;
        set_removible_default(colors.impresion.color1,colors.impresion.color1);

        $("#text_001").hide();
        $("#op_removible").show();
        $("#op_puente").hide();
        $("#dientes_label").text("");
        $("#up_rmv").removeClass("rmv_off").addClass("rmv_on");
        type = 6;
    });

    $("#btn-zfx").click(function(e) {
        dientes = [];
        set_clear_dientes();
        set_clear_circle();
        set_show_circle();
        set_type(4);
        color = colors.zfx.color1;
        $("#op_1").css("background",colors.zfx.color1);
        $("#op_2").css("background",colors.zfx.color2);

        $("#text_001").show();
        $("#op_puente").show();
        $("#op_removible").hide();
        $("#dientes_label").text("");
        $("#btn_puente2").removeClass("puente_op_on").addClass("puente_op_off"); 
        type = 4;
    });

    /*ADICIONALES*/
    $("#btn_puente2").click(function(e) {
        if(convert_boolean(sup[0].attr("data-puente"))){
            for(var i = 0; i<superior.length; i++){  
                sup[i].attr({"data-puente":"false"});
            }
            for(var i = 0; i<inferior.length; i++){  
                inf[i].attr({"data-puente":"false"});  
            }
            switch(sup[0].attr("data-type")){
                case "2":
                    color = colors.estetica.color1;                
                break;
                case "5":
                    color = colors.metal.color1;
                break;
                case "3":
                    color = colors.implantes.color1;                
                break;
                case "4":
                    color = colors.zfx.color1;
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
                    color = colors.estetica.color2;                
                break;
                case "5":
                    color = colors.metal.color2;
                break;
                case "3":
                    color = colors.implantes.color2;                
                break;
                case "4":
                    color = colors.zfx.color2;
                break;
            }
            $(this).removeClass("puente_op_off").addClass("puente_op_on"); 
        }
    });

    $("#up_rmv").click(function(e) {
        dientes = [];
        $("#dientes_label").text("");
        switch(sup[0].attr("data-type")){
            case "8":
                color = colors.removible.color2;
                color2 = colors.removible.color1;
            break;
            case "12":
                color = colors.ferula.color2;
                color2 = colors.ferula.color1;
            break;
            case "7":
                color = colors.virtual.color2;
                color2 = colors.virtual.color1;
            break;
            case "6":
                color = colors.impresion.color2;
                color2 = colors.impresion.color1;
            break;
        } 
        
        if(convert_boolean(sup[0].attr("data-removible"))){
            $(this).removeClass("rmv_on").addClass("rmv_off"); 
            for(var i = 0; i<superior.length; i++){
                sup[i].attr({"data-removible":"false"}); 
            }
            clear_tooth_up();
        }else{
            for(var i = 0; i<superior.length; i++){
                sup[i].attr({"data-removible":"true"}); 
            }
            $(this).removeClass("rmv_off").addClass("rmv_on");
            tooth_removibles_up(color2);
        }
    });

    $("#down_rmv").click(function(e) {
        dientes = [];
        $("#dientes_label").text("");
        switch(sup[0].attr("data-type")){
            case "8":
                color = colors.removible.color2;
                color2 = colors.removible.color1;
            break;
            case "12":
                color = colors.ferula.color2;
                color2 = colors.ferula.color1;
            break;
            case "7":
                color = colors.virtual.color2;
                color2 = colors.virtual.color1;
            break;
            case "6":
                color = colors.impresion.color2;
                color2 = colors.impresion.color1;
            break;
        }
        if(convert_boolean(inf[0].attr("data-removible-down"))){
            $(this).removeClass("rmv_on").addClass("rmv_off"); 
            for(var i = 0; i<inferior.length; i++){
                inf[i].attr({"data-removible-down":"false"}); 
            }
            clear_tooth_down();
            //dientes.splice( index, 1 );
        }else{
            for(var i = 0; i<inferior.length; i++){
                inf[i].attr({"data-removible-down":"true"}); 
            }
            $(this).removeClass("rmv_off").addClass("rmv_on");
            tooth_removibles_down(color2);
        }
    });
});