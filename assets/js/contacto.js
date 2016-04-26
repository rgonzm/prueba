/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function envia_mensaje(){
  
  if( $.trim($("#nombre").val()) == "" ){
    alert("Debe ingresar su nombre");
    $("#nombre").focus();    
    return false;
  }
  
  if( $.trim($("#mail").val()) == "" ){
    alert("Debe ingresar su correo electrónico");
    $("#mail").focus();    
    return false;
  }
  
  if( validarEmail($.trim($("#mail").val())) == false ){
    alert("La dirección de email "+$.trim($("#mail").val())+" es incorrecta.");
    $("#mail").focus();    
    return false;
  }
  
  
  if( $.trim($("#fono").val()) == "" ){
    alert("Debe ingresar algún teléfono de contacto.");
    $("#fono").focus();    
    return false;
  }
  
  
  if( $.trim($("#mensaje").val()) == "" ){
    alert("Debe ingresar su mensaje, debe tener mas de 10 caracteres.");
    $("#mensaje").focus();    
    return false;
  }
  
  if( $.trim($("#mensaje").val()).length < 10 ){
    alert("El mensaje debe tener mas de 10 caracteres.");
    $("#mensaje").focus();    
    return false;
  }
  
  
  $.post("/mail/send_mail",$("form").serialize(),function(data){
    $("form").hide("slow");
    //alert(data);
    $("#respuesta_mail").html("<div class=\""+data.clase+"\">"+data.mensaje+"</div>");
    
  });
  return false;
  
  
  
}


function validarEmail(valor) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)){

      return true;

  } else {

      return false;
  }
}
