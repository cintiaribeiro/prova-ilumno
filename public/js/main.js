$(document).ready(function(){
    $("input").removeAttr('placeholder');
    $("#option").html("");
    var scre = $("body").width();
    resize(scre)

    $(window).resize(function() {
        scre = $("body").width();
        resize(scre)
    });

    function resize(size){                   
        if(size > 576){
            $(".form-group > label").show();
            $("#hide").hide();
            $(".group").removeClass("no-gutters").addClass("form-group");
            $("form div").removeClass("p-0"); 
            $("input").attr("placeholder","")       
            $("#option").html("");                    
        }
        if(size > 768){
            $("[for=numero-documento]").text('Número do Documento');                                                   
        }
        if(size <= 768 ){
            $("[for=numero-documento]").text('N.° Documento');                                                  
        }
        if(size <= 576 ){
            $(".form-group > label").hide();  
            $(".group").removeClass("form-group").addClass("no-gutters");
            $("form div").addClass("p-0");
            $("#card").addClass("p-0");
            $("#hide").show();
            $("input").each(function(){
                val = $(this).attr("place");
                console.log(val);
                $(this).attr("placeholder", val);

            });
            $("#option").html("Tipo de Documento");
            
        }
    } 
    
    $("#form").submit(function() {                    
        var tam = $("option:selected", this).attr('tam');
        if($("input[name=numdoc]").val().trim().length > tam) {
            alert('Número do documento inválido');
            return false;
        }
    });
   
})