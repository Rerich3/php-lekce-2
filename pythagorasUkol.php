<?php
$a = 5 ;
$b = 4 ;
$obdelnikobsah = $a * $b ;


$strana = 6 ;
$uhel = 60 ;
$vyska = $strana * sin(deg2rad($uhel))  ;
$trojuhelnikobsah = round($strana * $vyska / 2) ;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Matematika</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Geometria <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Grécka matematika</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Funkcie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Moderná matematika</a>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledej</button>
        </form>
    </div>
</nav>
<div class="container">
    <div class="row align-items-center">
        <div class="col-6 mx-auto col-md-6 order-md-2">
            <img src="https://pbs.twimg.com/media/DY_OwOgW0AAH2eI.jpg" alt="https://pbs.twimg.com/media/DY_OwOgW0AAH2eI.jpg" class="img-thumbnail">
        </div>
        <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
            <h1 class="mb-3 bd-text-purple-bright">Pythagoras v nás</h1>
            <p class="lead">
                Řecký filosof Pythágorás se narodil mezi lety 580 a 570 před n.l. na Samu.Pythágora zná většina lidí spíše jako matematika, autora dvou základních matematických pouček. První z nich si jistě vybaví každý, jde o Pythágorovu větu. Pro připomenutí - obsah čtverce nad přeponou je roven součtu obsahů obou čtverců nad odvěsnami. Druhá z těchto notoricky známých konstatování hovoří o tom, že součet úhlů v trojúhelníku se rovná dvěma pravým úhlům (tedy 180 stupňům).
            </p>
            <p class="lead mb-4">
                Pythagorejská tradice měla velký vliv na Platóna, byla živá v novoplatónismu, v renesanci a v různých – často fantastických - podobách žije i dnes.Pythagoras uprchl a kolem roku 530 př. n. l. založil v dnešním Crotone v Kalabrii filosofickou školu. Žil se svými žáky podle přísných pravidel v pevném společenství a získal si i značný veřejný vliv.  Po jeho smrti prý občané zřídili v jeho domě chrám bohyně Déméter.
            </p>
            <div class="row mx-n2">
                <div class="col-md px-2">
                    <a href="/docs/4.3/getting-started/introduction/" class="btn btn-lg btn-bd-primary w-100 mb-3" onclick="ga('send', 'event', 'Jumbotron actions', 'Get started', 'Get started');">Celý životopis</a>
                </div>
                <div class="col-md px-2">
                    <a href="/docs/4.3/getting-started/download/" class="btn btn-lg btn-outline-secondary w-100 mb-3" onclick="ga('send', 'event', 'Jumbotron actions', 'Download', 'Download 4.3.1');">Stáhnout tabulku</a>
                </div>
            </div>

        </div>
        <main role="main" class="container">

            <div class="starter-template">
                <h1>
                    Obdelník        </h1>
                <table class="table">
                    <tbody>
                    <tr>
                        <th>Délka strany A: </th>
                        <td><?php
                            echo $a . ' cm';
                            ?></td>

                    </tr>
                    <tr>
                        <th>Délka strany B:</th>
                        <td><?php
                            echo $b . ' cm';
                            ?></td>

                    </tr>
                    <tr>
                        <th>Obsah:</th>
                        <td><?php
                            echo $obdelnikobsah . ' cm²';
                            ?></td>

                    </tr>
                    </tbody>
                </table>
                <h1>
                    Rovnostranný trojúhelník        </h1>
                <table class="table">
                    <tbody>
                    <tr>
                        <th>Délka strany: </th>
                        <td><?php
                            echo $strana . ' cm';
                            ?></td>

                    </tr>
                    <tr>
                        <th>Úhel:</th>
                        <td><?php
                            echo $uhel . ' °';
                            ?></td>

                    </tr>
                    <tr>
                        <th>Výška:</th>
                        <td><?php
                        echo $vyska . ' cm';
                        ?></td>

                    </tr>
                    <tr>
                        <th>Obsah:</th>
                        <td><?php
                            echo $trojuhelnikobsah . ' cm²';
                            ?></td>

                    </tr>
                    </tbody>
                </table>

            </div>

        </main>

