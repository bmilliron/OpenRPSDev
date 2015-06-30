function validate_login(e){
    e.preventDefault();
    //It is valid on default
    is_valid = true;

    //textboxes
    el_username = $('#username');
    el_password = $('#password');

    //textbox inputs
    username_text = el_username.val();
    password_text = el_password.val();

    //validate username
    if(username_text.length > 0){
        el_username.removeClass("error-field");
    }else{
        el_username.addClass("error-field");
        is_valid = false;
    }

    //validate password
    if(password_text.length > 0){
        el_password.removeClass("error-field");
    }else{
        el_password.addClass("error-field");
        is_valid = false;
    }

    if(is_valid){
        $('#login_form').submit();
    }else{
        $('#field_error').show();
    }

}

$('#login_submit').click(validate_login);
