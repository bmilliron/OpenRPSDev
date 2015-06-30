function validate_signup(e){
    e.preventDefault();
    //It is valid on default
    is_valid = true;

    //textboxes
    el_username = $('#username');
    el_email = $('#email');
    el_password = $('#password');
    el_password_confirm = $('#password_confirm');

    //textbox inputs
    username_text = el_username.val();
    email_text = el_email.val();
    password_text = el_password.val();
    password_confirm_text = el_password_confirm.val();

    //validate username
    if(username_text.length > 0){
        el_username.removeClass("error-field");
    }else{
        el_username.addClass("error-field");
        is_valid = false;
    }

    //validate email
    if(email_text.length > 0){
        el_email.removeClass("error-field");
    }else{
        el_email.addClass("error-field");
        is_valid = false;
    }

    //validate password
    if(password_text.length > 0){
        el_password.removeClass("error-field");
    }else{
        el_password.addClass("error-field");
        is_valid = false;
    }

    //check if password confirmation is equal to password
    if(
        (password_confirm_text.length > 0) &&
        (password_confirm_text == password_text)
    ){
        el_password_confirm.removeClass("error-field");
        $('#password_confirmation_error').hide();
    }else{
        el_password_confirm.addClass("error-field");
        $('#password_confirmation_error').show();
        is_valid = false;
    }

    if(is_valid){
        $('#signup_form').submit();
    }else{
        $('#field_error').show();
    }

}

$('#signup_submit').click(validate_signup);
