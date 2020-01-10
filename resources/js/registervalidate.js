function campos(){
    if(document.formulario.name.value.lenth==0){
        alert("Completa todos los campos")
        return 0;
    }

    if (document.formulario.surname.value.lenth == 0) {
        alert("Completa todos los campos")
        return 0;
    }

    if (document.formulario.email.value.lenth == 0) {
        alert("Completa todos los campos")
        return 0;
    }

    if (document.formulario.password.value.lenth == 0) {
        alert("Completa todos los campos")
        return 0;
    }

    if (document.formulario.password-confirm.value.lenth == 0) {
        alert("Completa todos los campos")
        return 0;
    }

    

}