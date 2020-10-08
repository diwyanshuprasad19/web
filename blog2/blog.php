<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tea blog</title>

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
    include 'includes/header.php';
    
    ?>
     

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Project
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php" class="btn btn-primary">Logout</a></h2>
                    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/Ze6m-gZg3Y4' frameborder='0' allowfullscreen></iframe></div>
                    <h2>Special Tea
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Tea Recipes- You'll have to admit, enjoying a hot cup tea on a breezy day is one of the simplest pleasures in life. You may think that making a cup of tea is probably the easiest task in the kitchen but it can definitely be tricky. Everyone has their own preferences and to get that cup of tea right each time requires some skill. The ingredients need to be in proportion, the ratio of milk to water should be right and it needs to be brewed just enough to make boost the flavours. Once you've mastered the perfect recipe and technique, it's time to experiment.</p>
                    <a href="https://food.ndtv.com/lists/8-best-tea-recipes-get-creative-with-chai-1728465" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/2jZDBz0qVtM' frameborder='0' allowfullscreen></iframe></div>
                    <h2>British Tea
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Generally speaking, any black tea will suffice for proper tea-drinking, though there are some that are very "British" in character (despite coming from India and China), such as Assam, Darjeeling, Ceylon, Lapsang Souchong, and Yunnan. Herbal teas are right out.</p>
                    <a href="https://steampunk.wonderhowto.com/how-to/hey-america-youre-drinking-your-tea-wrong-0141235/" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/MWhFCaEBTl0' frameborder='0' allowfullscreen></iframe></div>
                    <h2>Layered Milk Tea
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Tea master B Manickam is a man of few words; it’s his tea that speaks for him. 57-year-old Manickam is the brain behind a unique creation called layered tea. </p>
                    <a href="https://timesofindia.indiatimes.com/city/coimbatore/layered-tea-anyone/articleshow/68440861.cms" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
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

</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>