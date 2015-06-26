
<header>
    <div class="columns large-2 logo">
        <img src="img/logo.svg"/>
    </div>
    <div class="columns large-10">

    </div>
</header>

<div class="medium primary btn"><a href="login.php">Login</a></div><div class="medium primary btn"><a href="signup.php">Sign Up</a></div>';

<script type="text/javascript">
	$(function()
	{
		$("form").form();
	});
</script>

<script type="text/javascript">

	$("#register").validate({
        rules: {
           password: {
             required: true,
                minlength: 6,
                maxlength: 10,

           } ,

                password_confirm: {
                 equalTo: "#password",
                  minlength: 6,
                  maxlength: 10
            }


         },
        messages:{
        password: {
            required:"the passwords don\'t match!"

            }
        }

    });

</script>
