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
        echo "hello";
        echo $id;
        if ($slid_data = $db->getAllBySortOrder($id)){
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

<html>

<head>

    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
</head>



<body id="adminbody">
    <div id="adminwrapper">
        <div class="container-fluid">
            <?php include '../includes/admin_navbar.php' ?>
            <div id="adminpage-wrapper">
                <div class="wrapper" >

                    <div class="inner-bg" id="lesson_play">
                        <div class="container-fluid">
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
                                    <!--
                                <img id="xx" class="img-responsive" src="<?php echo$src_path.'1.jpg';?>" alt="Wrong link" width="800px" height="400px" >
                                -->
                                    <img id="xx" class="img-responsive" src="<?php echo $src_path.'1.jpg';?>" alt="Wrong link" min-width="100%" height="auto" >
                                </div>




                            </div>
                            <div class="row slidNavigator">
                                <div class="col-sm-12">

                                </div>
                                <div class="col-sm-12">
                                    <div class="detail-panal">
                                        <div class="row">
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
                                </div>
                            </div>
                            <div class="row slidNavigator">
                                <!--p id="p1">Hello World!</p-->
                                <div class="col-sm-12">
                                    <div class="detail-panal" style="border:1px solid black;width:100%;height:200px;overflow-y:hidden;overflow-x:scroll;">

                                        <nav id="menu" style="width:100000%;">
                                            <ul>
                                                <?php
                                                $index = 1;
                                                while ($index <= $no_of_slid){
                                                    $row = $slid_data->fetch(PDO::FETCH_ASSOC);
                                                    $start_time = $row['start_time'];
                                                    $end_time = $row['end_time']; ?>


                                                    <li style="float: left;padding-right: 10px"> <article data-start="<?php echo $start_time; ?>" data-end="<?php echo $end_time; ?>"> <a href="<?php echo $index ?>"><img  src=" <?php echo $src_path.$index.'.jpg' ?>  " height="140"  onclick="setCurTime(<?php echo $start_time ?>)"></a></article></li>
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
            </div>
        </div>
    </div>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--script src="../../../public/js/ucscvideobay.js"></script-->
        <script src="../../../public/js/jquery.colorbox.js"></script>
        <?php include '../../controllers/synchronize.php';?>
        <script src="../../../public/js/ucscvideobay.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <!--<script src="../../../library/Jquery/jquery.js"></script>-->
        <script src="../../../public/js/ucscvideobay.js"></script>
</body>
</html>




