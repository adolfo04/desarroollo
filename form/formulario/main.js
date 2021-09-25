function valida(f) {


    var val = true;
    var mensaje = "Debe llenar todos los campos :\n";

    var ely1 = document.getElementById('cui').value;
    
    if ( ely1 == "") {
        mensaje += "- CUI \n";
        val = false;
    }
    var ely2 = document.getElementById('primernombre').value;
    if ( ely2== "" || ely2.length < 5) {
        mensaje += "- Ingresar Minimo 5 caracteres para validar\n";
        val = false;
    }
    var ely3 = document.getElementById('segundonombre').value;
    if ( ely3= '' || ely3.length < 5) {
        mensaje += "- Ingresar Minimo 5 caracteres para validar\n";
        val = false;
    }
    var ely4 = document.getElementById('primerapellido').value;
    if (ely4 == "" || ely3.length < 5) {
        mensaje += "- Ingresar Minimo 5 caracteres para validar\n";
        val = false;
    }
    var ely5 = document.getElementById('segundoapellido').value;
    if ( ely5= '' || ely3.length < 5) {
        mensaje += "- Ingresar Minimo 5 caracteres para validar\n";
        val = false;
    }

    var ely6 = document.getElementById('edad').value;
    if ( ely6== "" || isNaN(ely6)) {
        mensaje += "- Su Edad Ingrese En numeros\n";
        val = false;
    }

    if (document.getElementById('email').value == '') {
        mensaje += '- Email';
        val = false;
    }
   var vtel = document.getElementById('telefono').value;
    if ( vtel== '' || !(/^\d{8}$/.test(vtel))) {
        mensaje += '- Tiene que ingresar los 8 digitos de su numero!';
        val = false;
    }

    var vprom = document.getElementById('promedio').value;
    if ( vprom == '' || isNaN(vprom) ) {
        mensaje += '- Promedio no Valido';
        val = false;
    }

    if (document.getElementById('uni').value == '') {
        mensaje += '- Universidad';
        val = false;
    }

    if (val == true) {
        alert('Los Datos que ha ingresado son correctos')
    } else {
        alert(mensaje);
        return val;
    }
}