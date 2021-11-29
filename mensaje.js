$('#password').keyup(function(e) {
        var strongRegex = new RegExp("^(?=.{20,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{15,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{8,}).*", "g");
        if (false == enoughRegex.test($(this).val())) {
                $('#mensaje').html('ingrese contraseña').css("color", "black");
        } else if (strongRegex.test($(this).val())) {
                $('#mensaje').className = 'ok';
                $('#mensaje').html('Contraseña Fuerte').css("color", "blue");
        } else if (mediumRegex.test($(this).val())) {
                $('#mensaje').className = 'alert';
                $('#mensaje').html('Fortaleza Media').css("color", "orange");
        } else {
                $('#mensaje').className = 'error';
                $('#mensaje').html('Contraseña Debil').css("color", "red");
        }
        return true;
    });
    