<?php
require_once '../../configs/core/init.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $db = DB::getInstance();


    $data = $db->getLessonbyid($id);
    if ($row = $data->fetch(PDO::FETCH_ASSOC)){
        $name = $row['name'];
        $lecture = $row['lecture'];
        $no_of_slid = $row['no_of_slides'];
        $temp = '../../../data/uploaded_lessons/'.$id.'/videos/1.mp4';
        $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/';

        //$slid_data->fetch(PDO::FETCH_ASSOC);
        //$topics = $db->getTpoicsById($id);
        //echo var_dump($topics);

        

        if ($slid_data = $db->getAllBySortOrder($id)){
            if ($topics = $db->getTpoicsById($id)){
            }else{
                echo 'Query error Title';
                Die();
            }
        }else{
            echo 'slid data not found';
            Die();
        }
    };
}
else{
    echo 'lesson id is not set';
    Die();
}

?>
<!DOCTYPE html>
<html lang="en">

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





</head>

<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">


            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

                <!-- side bar -->
                <?php
                #include '../../views/includes/sidebar.php'
                ?>
                <ul class="nav">
                    <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                </ul>

                <ul class="nav hidden-xs" id="lg-menu">

                    <?php
                    while ($row = $topics->fetch(PDO::FETCH_ASSOC)) {
                        $start_time = $row['start_time'];
                        $topic = $row['sub_title'];
                        ?>
                        <li><a onclick="setCurTime(<?php echo $start_time; ?>)"> <?php echo $topic; ?> </a></li>

                        <?php
                        }
                    ?>
                </ul>

                <ul class="nav hidden-xs">
                    <div class="row">
                    <li style="margin-bottom: 15px; margin-top:10px; ">Watch Next</li>
                    <div id="watch_next"></div>
                        </div>
                </ul>

            </div>
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                <?php
                include '../../views/includes/navbaruser_newlessonplay.php'
                ?>
                <div class="full ">
                    <div class="col-sm-12 text">
                        <div id="results"></div>
                    </div>

                    <div id = "lessonplay" class = "hide" class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video id="myVideo" class="embed-responsive-item"  width = "300px" height ="400px" autoplay controls>
                                        <source src="<?php echo "$temp"?>">
                                        <!--<source src="../../../data/uploaded_lessons/44/videos/1.mp4">-->
                                    </video>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <img id="xx" class="img-responsive" src="<?php echo $src_path.'1.jpg';?>" alt="Wrong link" min-width="100%" height="auto" >
                            </div>


                            <div class=" col-sm-12">
                                <div class="jumbotron-fluid" >
                                    <div class = "slidNavigator" style="margin-left: -10px;">
                                        <div class="col-sm-10">
                                            <div class="detail-panal" style="width: 122%;height: 53px;margin-bottom: 5px;">
                                                <div class="col-sm-6">
                                                    <div class="lesson-topic">
                                                        <?php echo $name; ?>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="lesson-topic">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <?php echo $lecture; ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                            <div class="col-sm-10">
                                                <div class="detail-panal" style="border:0px solid black;width:122%;height:164px;overflow-y:hidden;overflow-x:scroll;">

                                                    <nav id="menu" style="width:100000%;">
                                                        <ul style="list-style: none;">
                                                            <?php
                                                            $index = 1;
                                                            while ($index <= $no_of_slid){
                                                                $row = $slid_data->fetch(PDO::FETCH_ASSOC);
                                                                $start_time = $row['start_time'];
                                                                $end_time = $row['end_time']; ?>


                                                                <li style="float: left;padding-right: 10px">
                                                                    <article data-start="<?php echo $start_time; ?>" data-end="<?php echo $end_time; ?>">
                                                                        <a href="<?php echo $index ?>"><img  src=" <?php echo $src_path.$index.'.jpg' ?> " height="140"  onclick="setCurTime(<?php echo $start_time ?>)"></a>
                                                                    </article>
                                                                </li>
                                                                <?php
                                                                $index += 1;
                                                            }
                                                            ?>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>  <!--container end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--script src="../../../public/js/ucscvideobay.js"></script-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../../../public/js/jquery.colorbox.js"></script>
<script src="../../../public/js/userhome.js"></script>
<?php include '../../controllers/synchronize.php';?>

<script type="text/javascript">
    $(document).ready(function() {

        var panal = $("#lessonplay");


        $("#results").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
        panal.slideDown(function(){panal.removeClass("hide");});

        //load  lessons to the watch next.
        $("#watch_next").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
        $("#watch_next").load("../../models/fetch_lessons_withlimit.php",{"id":<?php echo $id; ?>});



        // this is for enter press , this call on click event
        $('#search-form').submit(function(e) {
            var $this = $(this);
            e.preventDefault(); // Prevents the form from submitting regularly
            $("#serchbut").click();

        });
        // this is for mouse click event
        $("#serchbut").click(function(){
            $( "#lessonplay" ).empty();
            $("#results").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
            var search_keyword = document.getElementById("srch-term").value;
            $("#results").load("../Search/searchResults.php",{'srch-term':search_keyword});

        });



    });
</script>










</body>
</html>

