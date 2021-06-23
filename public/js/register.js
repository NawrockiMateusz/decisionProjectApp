function register (){
    username = document.querySelector('input[name="username"]').value;
    email = document.querySelector('input[name="email"]').value;
    password = document.querySelector('input[name="password"]').value;


    jQuery.post('src/phpView/register.php', {
        username: username,
        email: email,
        password: password
    },

        function (data){console.log(data); alert("TEST ALERT");}


    )}