function guardar(){
    var nombre =  document.getElementById("nombres").value;
    var apellido =  document.getElementById("claves").value;

    if (nombre==""){
        alert("es obligatorio");
        document.getElementById("nombres").focus();
    }else{
        if (apellido==""){
            alert("obligatorio");
            document.getElementById("claves").focus(); 
}
    }
}