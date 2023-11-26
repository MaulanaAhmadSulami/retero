$(document).ready(function() {
    $('#registerForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response){
                if(response.success){
                    window.location.reload();
                }else{
                    $('#registerErrors').html('');
                    $.each(response.errors, function(field, errors){
                        if(field === 'password'){
                            $('#passwordError').html(errors.join('<br>'));
                        }else if(field === 'password_confirmation'){
                            $('$passwordConfirmationError').html(errors.join('<br>'));
                        }else if(field === 'email'){
                            $('#emailError').html(errors.join('<br>'));
                        }else if(field === 'name'){
                            $('#nameError').html(errors.join('<br>'));
                        }
                        else{
                            $('#registerErrors').append('<p>' + errors.join('<br>') + '</p>');
                        }
                    })
                }
            }
        });
    });

    $('#loginForm').on('submit', function(e){
        e.preventDefault();
        var form = this;

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response){
                if(response.success){
                    if(response.isAdmin){
                        window.location.href = response.adminHomeUrl;
                    }else{
                        window.location.reload();
                    }
                }else{
                    $('#loginErrors').html('');
                    $.each(response.errors, function(field, errors){
                        if(field === 'email'){
                            $('#emailLoginError').html(errors.join('<br>'));
                        }else if(field === 'password'){
                            $('#passworLoginError').html(errors.join('<br>'));
                        }else{
                            $('#loginErrors').append('<p>' + errors.join('<br>') + '</p>');
                        }
                    });
                    form.reset();
                }
            }
        });
    });
        
});