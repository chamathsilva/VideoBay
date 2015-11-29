<?php
require_once '../../configs/core/init.php';
$user =new User();
	if(!$user->isLoggedIn()){
        redirect::to('../index.php');
        die;
    }
?>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UCSC VideoBay</title>


        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../public/css/form-elements.css">
        <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
        <link rel="stylesheet" href="../../../public/css/navbaruser.css">
        <!--<link rel="stylesheet" type="text/css" href="../../../public/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="../../../public/slick/slick-theme.css"/>

        <!-- Color Box -->
        <link rel="stylesheet" href="../../../public/css/colorbox.css" />





    </head>

<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
            <!-- side bar -->
            <?php
                include '../../views/includes/sidebar.php'
            ?>
            </div>
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                <?php
                    include '../../views/includes/navbaruser_new.php'
                ?>

                <!-- new function -->
                <div class="full ">

                    <div class="col-sm-12 text">
                        <h3>Recent view</h3>
                        <?php echo($_SESSION["user"]) ?>
                        <div id="recentLesson"></div>
                    </div>




                    <!--current lessons -->
                    <div class="col-sm-12 text">
                        <h3>Current lessons</h3>
                        <!--div id="search_results"></div-->
                        <!--
                            <?php
                            $db = DB::getInstance();
                            $data = $db->getAll('lesson');
                            while($row = $data->fetch(PDO::FETCH_ASSOC)) {
                                $id = $row['lesson_id'];
                                $name = $row['name'];
                                $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/1.jpg';

                                #echo "</br><a href ='../lessonsplay/lessonPalyPanal.php?id=$id'> $name </a> ";
                                ?>

                                <div class="col-lg-3 col-md-4 col-xs-6 text2">
                                    <a class="thumbnail" href="../lessonsplay/lessonPalyPanal.php?id=<?php echo $id;?>" >
                                        <img class="img-responsive" src="<?php echo $src_path; ?>" alt="">
                                        <h4> <?php echo $name;?></h4>
                                    </a>

                                </div>
                            <?php
                            }
                            ?>
                            -->

                        <!-- all lessons load by AJAX to results div -->
                        <div id="results"></div>
                    </div>

                    <!--end of currrent lessons-->


                </div>
            </div>
        </div>
    </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../../../public/js/ucscvideobay.js"></script>
<script src="../../../public/js/userhome.js"></script>
<!--<script type="text/javascript" src="../../../public/slick/slick.min.js"></script>





<!--<script src="../../../../../UCSCpresent/new/js/scripts.js"></script>-->


<script type="text/javascript">
    $(document).ready(function() {

        //load all the results to home page when load the page.
        $("#results").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
        $("#results").load("../../models/fetch_lessons.php");


        //load recent lesson to home page when load the page.
        $("#recentLesson").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
        $("#recentLesson").load("../../models/fetch_last_lesson.php");





        // this is for enter press , this call on click event
        $('#search-form').submit(function(e) {
            var $this = $(this);
            e.preventDefault(); // Prevents the form from submitting regularly
            $("#serchbut").click();

        });

        // this is for mouse click event
        $("#serchbut").click(function(){
           $("#results").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
            var search_keyword = document.getElementById("srch-term").value;
            $("#results").load("../Search/searchResults.php",{'srch-term':search_keyword});

        });




    });
</script>


<script>
    function myFunction(id) {
        alert("I am an alert box!".concat(id));
    }
</script>

</body>
</html>

