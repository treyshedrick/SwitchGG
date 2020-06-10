<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    <!--Include game information-->
    <?php include($_SERVER['DOCUMENT_ROOT']."/randomizergameinfo.php")?>
</head>
<div class="container-fluid text-center">
<button type="button" class="btn btn-cyan btn-lg btn-block" onClick="location.href='http://switchgg.com' ">Back To Randomizer</button>
    <div class="row">
            <div class="col-lg-12">
                <i class="fas fa-spinner fa-spin fa-5x" id="spinner"></i>
            </div>
    </div>
    <div class="row animated bounceIn delay-3s">
        <div class="col-sm-12">
            <h2><?php echo $GameInfo[name];?></h2>
        </div>
    </div>
    <div class="row animated bounceIn delay-3s">
        <div class="col-sm-12">
            <h6>ESRB Rating: <?php echo $GameInfo[esrbrating];?></h6>
        </div>
    </div>
    <div class="row animated bounceInLeft delay-2s">
            <div class="col-xl-12">
            <?php videoOrPicture($GameInfo["hdclip"], $GameInfo["image"]);?>
            </div>
    </div>
    <div class="row animated bounceInLeft delay-2s">
        <div class="col-xl-12">
            <button class="btn btn-red btn-block" type="button" data-toggle="collapse" data-target="#description" aria-expanded="false" aria-controls="description">Game Description</button>
            <div class="collapse" id="description">
                <div class="small infotab"><?php echo $GameInfo[description];?></div>
            </div>
        </div>
    </div>
    <div class="row animated bounceIn delay-2s">
        <div class="col-sm-12">
            <button class="btn btn-outline-black btn-block waves-effect" type="button" data-toggle="collapse" data-target="#developers" aria-expanded="false" aria-controls="description">Developers</button>
            <div class="collapse" id="developers">
                <h6 class="infotab"><?php echo $GameInfo[developers];?></h6>
             </div>
        </div>
    </div>
    <div class="row animated bounceIn delay-2s">
        <?php metacriticUrl($GameInfo["reviewsurl"]);?>
        <div class="col-lg-12">
            <a href="<?php echo $GameInfo["nintendostoreurl"]?>" class="btn btn-cyan btn-block" target="_blank">Purchase at Nintendo Store</a>
        </div>
    </div> 
<footer>
    Data provided by <a href="https://rawg.io">Rawg.IO</a>
</footer>
</div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
    <script type="text/javascript" src="/spinner.js"></script>
</html>