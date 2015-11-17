
<?php

require_once '../../configs/core/init.php';


    $keyWord = $_POST['srch-term'];

    if(empty($keyWord)) {

        echo "Enter a keyword";

        //create JSON data
        $output = json_encode(array(
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));

        //echo $output;
    }

    else {
        $db = DB::getInstance();
        $data =$db->search($keyWord);

        while($row = $data->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['lesson_id'];
            $name = $row['name'];
            $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/1.jpg';

            echo '<div class="col-lg-3 col-md-4 col-xs-6 text2">';
            echo '<a class="thumbnail" href="../lessonsplay/lessonPalyPanal.php?id='."$id".'" >';
            echo '<img class="img-responsive" src='."$src_path".' alt="">';
            echo '<h4>'."$name".'</h4>';
            echo'</a>';
            echo'</div>';

            //create JSON data
            $output = json_encode(array(
                'type'=>'result',
                'id' => $id,
                'name' => $name,
                'src_path' => $src_path
            ));

            //echo $output;
        }
    }
?>


