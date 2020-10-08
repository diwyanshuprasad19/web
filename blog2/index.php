<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meri chay</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Meri Chay</div>
    <div class="address-bar">Jaipur-Ajmer Express Highway, Dehmi Kalan, Near GVK Toll Plaza, Jaipur, Rajasthan 303007<br>Manipal university jaipur</div>
    <?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>
<?php
    include 'includes/header.php';
    
    ?>
     
     
 
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Meri chay</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Using Bootstrap</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About 
                        <strong>Tea</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/tea.jpg" alt="" class="tea">
                    <hr class="visible-xs">
                    <p>Tea is an aromatic beverage commonly prepared by pouring hot or boiling water over cured or fresh leaves of the Camellia sinensis, an evergreen shrub native to East Asia.[3] After water, it is the most widely consumed drink in the world.[4] There are many different types of tea; some, like Darjeeling and Chinese greens, have a cooling, slightly bitter, and astringent flavour,[5] while others have vastly different profiles that include sweet, nutty, floral, or grassy notes. Tea has a stimulating effect in humans primarily by its caffeine content.[6].</p>
                    <p>Tea originated in the region encompassing today's Northeast India, north Myanmar, Southwest China and Tibet, where it was used as a medicinal drink by various ethnic groups in the region.[7][8] An early credible record of tea drinking dates to the 3rd century AD, in a medical text written by Hua Tuo.[9] It was popularised as a recreational drink during the Chinese Tang dynasty, and tea drinking spread to other East Asian countries. Portuguese priests and merchants introduced it to Europe during the 16th century.[10] During the 17th century, drinking tea became fashionable among the English, who started to plant tea on a large scale in India.</p>
                    <p>The term herbal tea refers to drinks not made from Camellia sinensis: infusions of fruit, leaves, or other parts of the plant, such as steeps of rosehip, chamomile, or rooibos. These are sometimes[11] called tisanes or herbal infusions to prevent confusion with tea made from the tea plant.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>Tea</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/Tea2.jpg" alt="" class="tea">
                    <p>The Chinese character for tea is 茶, originally written with an extra stroke as 荼 (pronounced tú, used as a word for a bitter herb), and acquired its current form during the Tang dynasty.[12][13][14] The word is pronounced differently in the different varieties of Chinese, such as chá in Mandarin, zo and dzo in Wu Chinese, za in some Xiang Chinese dialects, and ta and te in Min Chinese.[15] One suggestion is that the different pronunciations may have arisen from the different words for tea in ancient China, for example tú (荼) may have given rise to tê;[16] historical phonologists however argued that the cha, te and dzo all arose from the same root with a reconstructed pronunciation dra, which changed through sound shifts through the centuries.</p>
                    <p>There were other ancient words for tea, though ming (茗) is the only other one still in common use.[17][18] It has been proposed that the Chinese words for tea, tu, cha and ming, may have been borrowed from the Austroasiatic languages of people who inhabited southwest China; cha for example may have been derived from an archaic Austroasiatic root *la, meaning "leaf".[19] Most Chinese languages, such as Mandarin and Cantonese, pronounce it along the lines of cha, but Hokkien and Teochew Chinese varieties along the southern coast of China pronounce it like teh. These two pronunciations have made their separate ways into other languages around the world.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <?php
      
      include 'includes/footer.php';
    
    ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
