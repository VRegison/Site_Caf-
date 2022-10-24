<?php
$handle = curl_init('https://api.sampleapis.com/coffee/hot');

// informa que não queremos exibir a resposta diretamente, mas sim pegar seu retorno
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($handle);
curl_close($handle);

$coffes = json_decode($response, true);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Plugin Router Machine -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/section.css">
    <link rel="stylesheet" href="../style/cards.css">
    <link rel="stylesheet" href="../style/footer.css">


    <title>Home</title>
</head>

<body>

    <!-- ################### Navegação ################### -->
    <nav>
        <a href="#home"><i class="fa-solid fa-house"></i></a>
        <a href="#values_company"><i class="fa-solid fa-building"></i></a>
        <a href="#coffes"><i class="fa-solid fa-mug-saucer"></i></a>
        <a href="#_map"><i class="fa-solid fa-map"></i></a>
        <a href="#contact"><i class="fa-solid fa-address-book"></i></a>
    </nav>


    <!-- ################### Home tela de fundo ###################! -->
    <header>
        <div id="home">
            <div id="result"></div>
        </div>
    </header>

    <!-- ################### Cards Values ################### -->
    <section id="values_company">
        <h1 class="title_section">Company Values</h1>
        <hr>

        <div id="row">
            <div class="card red">
                <h2 class="title_card">Quality</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                </p>
                <img class="image" src="../assets/badge.png" alt="quality" />
            </div>
            <div class="card blue">
                <h2 class="title_card">Team</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <img class="image" src="../assets/group.png" alt="Team" />

            </div>
            <div class="card green">
                <h2 class="title_card">Payment</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it. </p>

                <img class="image" src="../assets/pay.png" alt="Payment" />

            </div>
        </div>

    </section>

    <!-- ################### Cardapio de cafés ################### -->
    <div id="coffes">
        <h1 class="title_section">Our best coffees !</h1>
        <hr>
    </div>
    <div id="cards">
        <?php foreach ($coffes as $coff => $value) : ?>
            <main id="container">

                <div class="product-details">

                    <h1 id="title_coff"><?= $coffes[$coff]['title'] ?></h1>

                    <p class="information"><?= $coffes[$coff]['description'] ?></p>
                    <div class="control">
                        <!-- valor -->
                    </div>

                </div>

                <div class="product-image">

                    <img src="<?= $coffes[$coff]['image'] ?>" alt="">
                    <div class="info">
                        <h2>Ingredients</h2>
                        <ul>
                            <?php foreach ($coffes[$coff]['ingredients']  as $ingre => $value) : ?>
                                <li><?= $value ?></li>
                            <? endforeach ?>

                        </ul>
                    </div>
                </div>
            </main>
        <?php endforeach ?>
    </div>


    <!-- Mapa -->
    <footer>
        <h1 id="title_map">Where are coffee shops ?</h1>
        <div id="_map">

            <div id="container_map">
                <div id="map">
                </div>
                <div id="map_text">
                    <p>
                        We currently have <u>9</u> active coffee shops, ready to serve you, It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long
                        established fact that a reader will be distracted by the readable content of a page when looking at
                        its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                        letters, as opposed to using 'Content here, content here', making it look like readable English.
                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                        text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                        versions have evolved over the years, sometimes by accident, sometimes on purpose
                        (injected humour and the like).

                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="service">

    </div>


    <script src="../js/mapa.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            var codigo = localStorage.getItem('codigo');
            if (typeof(codigo) !== "string") window.location.href = '../index.php'
        });



        // FUNÇÃO MENU RESPONSIVE
        function menuResponsive() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        // Escrever sozinho

        var texto = "Life only begins after coffee! Come to the largest coffee shop in the state, Vregison Cafés!";
        var result;

        var count = 0;

        function digitar() {
            result = document.getElementById("result");
            window.setTimeout(function() {
                inserir(texto[count])
            }, 70);
        }

        function inserir(letra) {
            result.innerHTML += letra;
            count++;
            if (count < texto.length)
                window.setTimeout(function() {
                    inserir(texto[count])
                }, 70);
        }

        window.onload = digitar;
    </script>
</body>

</html>