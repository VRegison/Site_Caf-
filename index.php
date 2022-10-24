<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/index.css">
    <title>The Cafe</title>
</head>

<body>

    <main>
        <section id="left">
            <img src="./assets/cofee.png" alt="">
            <div>
                <p>Behind a great staff, there is a good amount of coffee. Make your order now!</p>
            </div>
        </section>

        <section id="right">
            <div id="title">
                <p id="the">The</p>
                <p>Cafe...</p>
            </div>
            <form>
                <div>
                    <input type="text" id="user" placeholder="Enter the user" />
                </div>
                <div>

                    <input type="text" id="pass" placeholder="Enter the password" />
                </div>
                <p id="text_link">Register now</p><a onclick="createUser()">Create user</a>
                <button type="submit" onclick="event.preventDefault();login()">Login</button>

            </form>
        </section>
    </main>































    <script type="text/javascript" src="./js/login.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            var codigo = localStorage.getItem('codigo');
            if (typeof(codigo) == "string") window.location.href = 'pages/home.php'



        });
    </script>
</body>

</html>