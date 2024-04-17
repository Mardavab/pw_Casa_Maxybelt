function login() {
    var username = $('#username').val();
    var password = $('#password').val();
    

    if (!username || !password) 
        return M.toast({
            html: '<span class="orange-text ">Asegurese que todos los campos esten llenos</span>',
            classes: 'rounded  orange lighten-5 '
        })
    
        return Swal.fire({
            icon: (username == "admin" && password == "1234") ? 'success': 'error' ,
            title: (username == "admin" && password == "1234") ? 'Incio sesion el admin':'no Inicio sesion el admin'
        }).then((result) => {
            console.log(result);
            if(result.isDismissed || result.isConfirmed)
                window.location = "http://localhost:3000/pages"
        })
}