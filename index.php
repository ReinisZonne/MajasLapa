<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!doctype html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- import links -->
    <link rel="stylesheet" href="./css/lightbox.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <title>Saules sistēma</title>
</head>
<body>
<!-- Navigation -->
<!-- <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./img/solar.png" alt="solar system"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#planetas">Planētas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#foto-galerija">Galerija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontakti">Kontakti</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<!-- Image slide -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/background.png" alt="space">
        </div>
    </div>
</div>

<!-- Welcome Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-2">Saules sistēma</h1>
            <hr>
        </div>
        <div class="col-12">
            <p class="lead">Saules sistēma ir Saule un ap to riņķojošo debess ķermeņu kopums — astoņas planētas,
                kas veido planētu sistēmas, kā arī citi ievērojami mazāki ķermeņi, piemēram,
                pundurplanētas un Saules sistēmas mazie ķermeņi, piemēram,
                komētas un asteroīdi.
                Saules sistēma atrodas Piena Ceļa spirālzarā "Oriona rokā" (Orion Arm),
                26 000 gaismas gadu attālumā no galaktikas centra.</p>
        </div>
    </div>
</div>

<!--Four Column Section-->
<div class="planetas" id="planetas">
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-3">Planētas</h1>
            </div>
            <hr>
        </div>
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <h3 class="display-4">Merkurs</h3>
                <hr>
                <p class="lead">Merkurs ir Saulei tuvākā un mazākā Saules sistēmas planēta.
                    Merkurs apriņķo Sauli 88 dienās,
                    tā arī ir planēta ar lielāko orbītas ekscentritāti.
                    Merkuram nav pavadoņu.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <h3 class="display-4">Venēra</h3>
                <hr>
                <p class="lead">Venera Saules sistēmā ir otrā planēta no Saules.
                    Tā ir viena no Zemes grupas planētām. Venera ir trešais spilgtākais objekts
                    (spilgtākie ir Saule un Mēness) pie debess sfēras.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <h3 class="display-4">Zeme</h3>
                <hr>
                <p class="lead">Zeme ir trešā planēta Saules sistēmā, skaitot no Saules,
                    kā arī piektā lielākā planēta Saules sistēmā,
                    lielākā planēta no Saules sistēmas Zemes grupas planētām.
                    Zemei ir viens dabiskais pavadonis — Mēness.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <h3 class="display-4">Marss</h3>
                <hr>
                <p class="lead">Marss ir Saules sistēmas ceturtā planēta, kuru nereti dēvē arī par "Sarkano planētu".
                    Marss nosaukts romiešu kara dieva vārdā.
                    Marsam ir divi pavadoņi — Foboss un Deimoss.</p>
            </div>
        </div>
    </div>
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <h3 class="display-4">Jupiters</h3>
            <hr>
            <p class="lead">Jupiters ir Saules sistēmas piektā, kā arī lielākā un masīvākā planēta,
                un kopā ar Saturnu, Urānu un Neptūnu tiek klasificēts kā gāzu planēta, kas nozīmē,
                ka tā iekšējo uzbūvi un atmosfēru galvenokārt sastāda ūdeņradis un hēlijs.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <h3 class="display-4">Saturns</h3>
            <hr>
            <p class="lead">Saturns, viena no milzu planētām, ir Saules sistēmas planēta — sestā no Saules.
                Tā ir otra lielākā Saules sistēmas planēta un tālākā planēta, ko no Zemes var redzēt ar neapbruņotu aci.
                Planēta ir nosaukta romiešu dieva Saturna vārdā.
                Saturna īpaša pazīme ir tā gredzeni, kas sastāv no ledus un putekļiem.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <h3 class="display-4">Urāns</h3>
            <hr>
            <p class="lead">Urāns ir viena no Saules sistēmas milzu planētām, kā arī septītā planēta no Saules,
                kuru 1781. gadā atklāja britu astronoms Viljams Heršels.
                Tā ir trešā lielākā Saules sistēmas planēta pēc diametra un ceturtā lielākā pēc masas.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <h3 class="display-4">Neptūns</h3>
            <hr>
            <p class="lead">Neptūns ir viena no Saules sistēmas milzu planētām un astotā planēta no Saules.
                Neptūns ir nosaukts romiešu jūras dieva Neptūna vārdā. Neptūna masa ir lielāka par Urāna masu.
                Neptūnam ir 14 pavadoņi. Tam ir arī vismaz 3 planetārie gredzeni.</p>
        </div>
    </div>
</div>
<hr>

<!-- Login form -->
<span id="sazina">
    <div class="login" id="login">
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <form action="index.php#sazina" method="post">
                        <div class="form-group">
                            <h3><label for="name">Vārds</label></h3>
                            <input type="name" class="form-control" id="name" aria-describedby="Vārds" placeholder="Vārds" name="name">
                        </div>
                        <div class="form-group">
                            <h3><label for="surname">Uzvārds</label></h3>
                            <input type="surname" class="form-control" id="surname" aria-describedby="Uzvārds" placeholder="Uzvārds" name="surname">
                        </div>
                        <div class="form-group">
                            <h3><label for="email">E-pasts</label></h3>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-pasts" name="e-mail">
                        </div>
                        <div class="form-group">
                            <h3><label for="telephone">Telefons</label></h3>
                            <input type="telephone" class="form-control" id="telephone" placeholder="Telefons" name="telephone">
                        </div>
                        <div class="form-group">
                            <h3><label for="textArea">Jūsu jautājums</label></h3>
                            <textarea class="form-control" id="textarea" rows="4" name="question" placeholder="Jautājums"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</span>

<!-- Php code -->
<?php
    if(isset($_POST['save'])) {
        if(empty($_POST['name']))
        {
            echo "<b>Vārds:</b> NEVAR BŪT TUKŠS</br>";
        } else {
            if(preg_match('~[0-9]+~', $_POST['name'])) {
                echo "<b>Vārds:</b> NEVAR SATURĒT CIPARUS</br>";
            } else {
                echo "<b>Vārds:</b> {$_POST['name']}</br>";
            }
        }
        if(empty($_POST['surname']))
        {
            echo "<b>Uzvārds:</b> NEVAR BŪT TUKŠS</br>";
        } else {
            if(preg_match('~[0-9]+~', $_POST['surname'])) {
                echo "<b>Uzvārds:</b> NEVAR SATURĒT CIPARUS</br>";
            } else {
                echo "<b>Uzvārds:</b> {$_POST['surname']}</br>";
            }
        }
        if(empty($_POST['e-mail']))
        {
            echo "<b>E-pasts:</b> NEVAR BŪT TUKŠS</br>";
        } else {
            echo "<b>E-pasts: </b>{$_POST['e-mail']}</br>";
        }
        if(empty($_POST['telephone']))
        {
            echo "<b>Telefons:</b> NEVAR BŪT TUKŠS</br>";
        } else {
            if(preg_match('~[aA-zZ]+~', $_POST['surname'])) {
                echo "<b>Telefons: </b>NEVAR SATURĒT BURTUS</br>";
            } else {
                echo "<b>Telefons: </b>{$_POST['telephone']}</br>";
            }
        }
        echo "<b>Jautājums: </b>{$_POST['question']}";
}
?>

<hr>
<!-- Google Maps -->
<div class="GoogleMaps">
    <div class="container img-fluid text-center">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <h2>Rīgas observatorija</h2>
                <p>Latvijas Universitātes observatorija <br>
                    Adrese: Latvijas Universitāte, Raiņa bulvāris 19, Rīga <br>
                    Latvijas Universitātes observatorijā novērojumi notiek ceturtdienās no plkst. 19:00 - 21:00.</p>
            </div>
            <div class="col-lg-6">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.861146023492!2d24.057702015642146!3d56.951180206397034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eed002dd657133%3A0x8f8cc7a39a663f6e!2sLatvijas%20Universit%C4%81te%2C%20Astronomijas%20instit%C5%ABts%2C%20Astronomijas%20observatorija!5e0!3m2!1slv!2slv!4v1575735069885!5m2!1slv!2slv" width="400" height="300" style="border:0;" allowfullscreen=""></iframe></p>
            </div>
        </div>
    </div>
</div>
<hr class="my-4">
<!-- Image gallery-->
<div class="images" id="foto-galerija">
    <div class="container-fluid img-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <div class="title">
                    <h1 class="display-3">Foto galerija</h1>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="img-fluid">
                    <a data-lightbox="Saules sistēma" data-title="Merkūrijs" href="./img/mercury.jpg"><img src="./img/mercury.jpg" alt="Merkūrijs" class="img-thumbnail w-100"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="img-fluid">
                    <a data-lightbox="Saules sistēma" data-title="Venēra" href="./img/venus.jpg"><img src="./img/venus.jpg" alt="Venēra" class="img-thumbnail w-100"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="img-fluid">
                    <a data-lightbox="Saules sistēma" data-title="Zeme" href="./img/earth.jpg"><img src="./img/earth.jpg" alt="Earth" class="img-thumbnail w-100"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="img-fluid">
                    <a data-lightbox="Saules sistēma" data-title="Marss" href="./img/mars.jpg"><img src="./img/mars.jpg" alt="Mars" class="img-thumbnail w-100"></a>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="img-fluid">
                    <a data-lightbox="Saules sistēma" data-title="Jupīters" href="./img/jupiter.png"><img src="./img/jupiter.png" alt="Jupīters" class="img-thumbnail w-100"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="img-fluid">
                    <a data-lightbox="Saules sistēma" data-title="Saturns" href="./img/saturn.png"><img src="./img/saturn.png" alt="Saturns" class="img-thumbnail w-100"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="img-fluid">
                    <a data-lightbox="Saules sistēma" data-title="Neptūns" href="./img/neptune.png"><img src="./img/neptune.png" alt="Neptūns" class="img-thumbnail w-100"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="img-fluid">
                    <a data-lightbox="Saules sistēma" data-title="Urāns" href="./img/uranus.jpg"><img src="./img/uranus.jpg" alt="Urāns" class="img-thumbnail w-100"></a>
                </figure>
            </div>
        </div>
    </div>
</div>

<hr>
<!-- Video gallery -->
<div class="VideoGallery">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <h2 class="display-3">Video</h2>
                <p class="lead">Video matriālā ietver visas pasaules vēsturi. <br>
                    Video sākuma daļā tiek atveidot pasaules izveidošanās, tālāk seko pirmā dzīvība, kas sāk izveidoties vairākus miljardus pirms mūsu ēras. <br>
                    Video arī ietver dinozauru ēru, kā arī pēc tam pirmās cilvēces rašanos, visbeidzot ar mūsdienām.</p>
            </div>
            <div class="video">
                <div class="col-lg-6">
                    <p><iframe width="500" height="315" src="https://www.youtube.com/embed/xuCn8ux2gbs" allowfullscreen></iframe></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer>
    <div class="container-fluid padding" id="kontakti">
        <div class="row text-center">
            <div class="col-md-12">
                <hr class="light">
                <p><b>Autors:</b> Reinis Zonne</p>
                <hr class="light">
            </div>
            <div class="col-md-12">
                <p><b>e-pasts:</b> example@gmail.com</p>
                <hr class="light">
            </div>
            <div class="col-md-12">
                <p><b>Instagram:</b> @seksists</p>
                <hr class="light">
            </div>
            <div class="col-md-12">
                <p><b>Telefona numurs:</b> +371 25666783</p>
                <hr class="light">
            </div>
        </div>
    </div>
</footer>

<!-- Java script files -->
<script src="lib/lightbox-plus-jquery.min.js"></script>
<script src="lib/lightbox.min.js"></script>
<script src="./lib/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>