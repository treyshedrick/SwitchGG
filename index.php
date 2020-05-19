<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    <!--Load initial randomized game-->
    <?php include($_SERVER['DOCUMENT_ROOT']."/initialrandomizer.php")?>
</head>
<button type="button" class="btn btn-cyan btn-lg btn-block">Home</button>
<button type="button" onClick="window.location.reload();" class="btn btn-red btn-lg btn-block">Randomize!</button>
<div class="container-fluid text-center">
    <div class="row">
            <div class="col-lg-12">
                <i class="fas fa-spinner fa-spin fa-5x" id="spinner"></i>
            </div>
    </div>
    <div class="row">
            <div class="col-lg-12">
                <img src="<?php echo $Game[image];?>" class="img-fluid animated bounceInLeft delay-2s">
            </div>
    </div>
    <div class="row animated bounceIn delay-3s">
        <div class="col-sm-12">
            <h2><?php echo $Game[name];?></h2>
        </div>
    </div>
    <div class="row animated bounceIn delay-3s">
        <div class="col-sm-4">
            <h3>Release Date</h3>
            <h4><?php echo $Game[releaseDate];?></h3>
        </div>
        <div class="col-sm-4">
            <h3>Metacritic Rating</h3>
            <h4><?php echo $Game[metacritic];?></h4>
        </div>
        <div class="col-sm-4">
            <h3>Rawg Rating</h3>
            <h4><?php echo $Game[rating];?></h4>
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