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
    <div class="row animated bounceInLeft delay-2s">
            <div class="col-xl-6">
                <img src="<?php echo $GameInfo[image];?>" class="img-fluid">
            </div>
            <div class="col-xl-6">
                <h3>Game Description</h3>
                <div class="small"><?php echo $GameInfo[description];?></div>
            </div>
    </div>
    <div class="row animated bounceIn delay-3s">
        <div class="col-lg-12">
            <h5>ESRB Rating</h5>
            <h6><?php echo $GameInfo[esrbrating];?></h6>
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