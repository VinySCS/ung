<!DOCTYPE html>
<html>

<head>
    <!--Configuração da Página-->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Index-VinySite</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--rotasinternas-->
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

</head>

<body><!--lembrar ortiz prox aula-->
<?php
              include ('navbar.php')
                ?>
    <!--Conteúdo da Página-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="divmenu">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" id="divbanner">
                <!--<img src="img/samurai.jpg" width="100%">-->
                
                <hr color="blue" width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center" id="divcard1">
                <div class="card col-md-12" id="Cards">
                    <div class="card-header">
                        <font class="TituloCard">Supernatural</font>
                    </div>
                    <div class="card-body" id="Cards">
                        <img src="img/supernatural.jpg " class="ImgCard">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center " id="divcard2 ">
                <div class="card col-md-12" id="Cards">
                    <div class="card-header">
                        <font class="TituloCard">Hannibal</font>
                    </div>
                    <div class="card-body" id="Cards">
                        <img src="img/hannibal.jpg " class="ImgCard">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center " id="divcard3 ">
                <div class="card col-md-12" id="Cards">
                    <div class="card-header">
                        <font class="TituloCard">Falc&otilde;es Motoclube</font>
                    </div>
                    <div class="card-body" id="Cards">
                        <img src="img/falcoes.jpg " class="ImgCard">
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-4 text-center " id="divcard4 ">
                <div class="card col-md-12" id="Cards">
                    <div class="card-header">
                        <font class="TituloCard">CSGO</font>
                    </div>
                    <div class="card-body" id="Cards">
                        <img src="img/csgo.jpg " class="ImgCard">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center " id="divcard5 ">
                <div class="card col-md-12" id="Cards">
                    <div class="card-header">
                        <font class="TituloCard">Sons Of Anarchy</font>
                    </div>
                    <div class="card-body" id="Cards">
                        <img src="img/soa.jpg " class="ImgCard">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center " id="divcard6 ">
                <div class="card col-md-12" id="Cards">
                    <div class="card-header">
                        <font class="TituloCard">F. Society</font>
                    </div>
                    <div class="card-body" id="Cards">
                        <img src="img/fsociety.jpg " class="ImgCard">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   
</body>
<?php
    include('rodape.php')
?>
</html>