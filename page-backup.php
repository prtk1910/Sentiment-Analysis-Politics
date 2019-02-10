<!doctype html>
<html lang="en">
<?
require 'connection.php';
require 'functions.php';
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pythrons - Political Opinion Sentiment Analysis</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="page.php">Pythrons</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>



                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="page.php">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="visualizations.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-fw fa-chart-pie"></i>Visualizations<span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="visualizations.php">Statistics<span class="badge badge-secondary">Statistics</span></a>
                                        </li>

                                    </ul>
                                </div>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Subscriptions</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="modi_sub.php">Modi<span class="badge badge-secondary">Modi</span></a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="map.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Live Map Feed</a>
                                    <div id="submenu-5" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="map_aap.php">AAP<span class="badge badge-secondary">AAP/</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="map_congress.php">Congress<span class="badge badge-secondary">Congress/</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="map_bjp.php">BJP<span class="badge badge-secondary">BJP/</span></a>
                                            </li>



                                        </ul>
                                    </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Some Detailed Analytics on your search term </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Analysis</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                      <div class="card">
                          <h5 class="card-header">Enter Search Term: </h5>
                          <div class="card-body">
                              <form name="search" method="get">
                                  <div class="form-group">
                                  <!--    <label for="inputText3" class="col-form-label">Input Text</label>-->
                                      <input id="inputText3" type="text" class="form-control" name="search">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Primary</button>
                              </form>
                          </div>
                      </div>
                  </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <?php
                        $string = "";
                        if(isset($_GET["search"])) {
                          $keyword=$_GET["search"];
                          $keywordurl=str_replace(" ","+",$keyword);
                          $url ="https://api.social-searcher.com/v2/search?q=" . $keywordurl . "&key=5125c917b806a166cfdf1865c9ab8f47&fields=posted,text,sentiment,popularity,tags,user_mentions,user&limit=50&network=web,twitter,reddit,instagram&lang=en";
                          $res=CallAPI("GET",$url);
                          $jsonres=json_decode($res,true);
                          $x=$jsonres["posts"];
                          $stop=0;
                          foreach($x as $r) {
                            $usermentions="";
                            $tags="";
                            $count=0;
                            $posted="";
                            $text="";
                            $sentiment="";
                            $username="";
                            $imageurl="";
                            $location="";


                            foreach($r as $k=>$v) {
                              if($k=="user_mentions") {
                                foreach($v as $iter) {
                                  $usermentions.=$iter["text"];
                                  $usermentions.=" ";
                                }
                              }
                              else if($k=="tags") {
                                foreach($v as $iter) {
                                  $tags.=$iter["text"];
                                  $tags.=" ";
                                }
                              }
                              else if($k=="popularity") {
                                foreach($v as $iter) {
                                  $count+=$iter["count"];
                                }
                              }

                              else if($k=="posted") {
                                $posted=$v;
                              }
                              else if($k == "text") {
                                $text=$v;
                                if($stop<10) {
                                  $string .= $text;
                                  $string .= " ";
                                  $stop++;
                                }
                              }
                              else if($k=="sentiment"){
                                $sentiment=$v;
                              }
                              else if($k=="user") {
                                  $username=$v["name"];
                                  $imageurl=$v["image"];
                                  if(!isset($v["location"]))
                                    $location="Mumbai, India";
                                  else
                                    $location=$v["location"];
                              }
                              else {
                                echo("else");
                              }
                            }
                          $sql="insert into posts(posted,text,sentiment,count,usermentions,tags,username,imageurl,location,keyword) values( '$posted' ,'$text','$sentiment',$count,'$usermentions', '$tags','$username', '$imageurl', '$location','$keyword')";
                          $res=  $con->query($sql);
                        }
                          $sql="select * from posts order by posted desc limit 50";
                          $result = $con->query($sql);
                          if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                                if(!isset($v["imageurl"]))
                                  $imagepath=$row["imageurl"];
                                else
                                  $imagepath="./avatar.png";
                                echo "
                                <div class='card'>
                                    <div class='card-header'>
                                        " . $row["posted"]  . " - " . $row["location"] ."
                                    </div>
                                    <div class='card-body'>
                                        <blockquote class='blockquote mb-0'>
                                        <img src=". $imagepath .">
                                            <p>"  . $row["text"] .  "</p>
                                            <footer class='blockquote-footer'>
                                                <cite title='Source Title'>" . $row["username"] ." </cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>";
                              }
                          } else {
                              echo "0 results";
                          }
                        //  echo $string;
                          $result=WatsonCall($string,$keyword);
                          if(isset($result)) {
                            $jsonres=json_decode($result,true);

                            $x=$jsonres["keywords"];
                            $e=$jsonres["emotion"];
                            $keywords="";
                            $sadness="";
                            $joy="";
                            $fear="";
                            $disgust="";
                            $anger="";
                            foreach($x as $r) {
                              foreach($r as $k=>$v) {
                                if($k=="text") {
                                  $keywords .= $v;
                                  $keywords .= " ";
                                }
                              }
                            }
                            foreach($e as $r) {
                              foreach($r as $k=>$v) {
                                if($k=="emotion") {
                                  $sadness = $v["emotion"]["sadness"];
                                  $joy = $v["emotion"]["joy"];
                                  $fear = $v["emotion"]["fear"];
                                  $disgust = $v["emotion"]["disgust"];
                                  $anger = $v["emotion"]["anger"];
                                }
                              }

                            }
                            $sql="insert into keywords(keyword,sadness,joy,fear,disgust,anger,words) values( '$keyword' , '$sadness','$joy', '$fear', '$disgust','$anger','$keywords')";
                            $res=  $con->query($sql);
                            echo $res;
                          }
                      }

                      //$string = 'RT @shibuchandran28: Day by day love for Modi keeps multiplying....#TNWelcomesModi';

                        ?>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
</body>

</html>
