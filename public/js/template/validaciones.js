function esDominioValido(dominio) {
    dominio = dominio.replace(/ /g, "");
    return (dominio.match(/^[a-zA-Z]{3}\d{3}$/) || dominio.match(/^[A-Za-z]{2}[0-9]{3}[A-Za-z]{2}$/) || dominio.match(/^[A-Za-z]{1}[0-9]{7}/) || dominio.match(/^\d{3}[a-zA-Z]{3}$/) || dominio.match(/^[a-zA-Z]{1}\d{3}[a-zA-Z]{3}$/));
}

function esMoto(dominio) {
    dominio = dominio.replace(/ /g, "");
    return (dominio.match(/^\d{3}[a-zA-Z]{3}$/) || dominio.match(/^[a-zA-Z]{1}\d{3}[a-zA-Z]{3}$/));
}

function esAuto(dominio) {
    dominio = dominio.replace(/ /g, "");
    return (dominio.match(/^[a-zA-Z]{3}\d{3}$/) || dominio.match(/^[A-Za-z]{2}[0-9]{3}[A-Za-z]{2}$/) || dominio.match(/^[A-Za-z]{1}[0-9]{7}/) || dominio.match(/^[D|C|I|M|A]{1}[0-9]{3}[A-Za-z]{3}$/));
}
function esNombreValido(nombre) {
    return (!nombre.match(/\d+/) && nombre.length);
}
function esApellidoValido(apellido) {
    return (!apellido.match(/\d+/) && apellido.length);
}
function esDocumentoValido(doc) {
    return (doc.match(/^[0-9]+$/));
}

function esCuitValido(a) {
    n = new Array(12);
    if (a.length != 11) return false;

    for (i = 0; i < 12; i++) n[i] = parseInt(a.substring(i, i + 1));
    flag = (11 - (((n[9] * 2) + (n[8] * 3) + (n[7] * 4) + (n[6] * 5) + (n[5] * 6) + (n[4] * 7) + (n[3] * 2) + (n[2] * 3) + (n[1] * 4) + (n[0] * 5)) % 11));

    switch (flag) {
        case 11 :
            flag = 0;
            break;
        case 10 :
            flag = 9;
            break;
    }

    return (n[10] == flag);
}
function esEmailValido(email) {
    return (email.match(/^[-a-zA-Z0-9~!$%^&*_=+}{\'?]+(\.[-a-zA-Z0-9~!$%^&*_=+}{\'?]+)*@([a-zA-Z0-9_][-a-zA-Z0-9_]*(\.[-a-zA-Z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-zA-Z][a-zA-Z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/));
}
function esTelefonoValido(telefono) {
    return (telefono.match(/^[0-9\-\(\)\ \#]{8,100}$/));
}
function esCalleValida(calle) {
    return (calle.match(/^[a-z\d\-_áéíóúàèìòùÁÉÍÓÚÀÈÌÒÙäëïöüÄËÏÖÜ\.´'çÇñÑ\s]+$/i));
}
function estaSeleccionado(valor) {
    return (valor != 0 && valor != -1 && valor != null);
}

function esFechaNacimientoValido(fechaNac) {
    return (fechaNac.match(/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/));
}

function estaVacio(valor){
    return valor.trim() == "";
}
