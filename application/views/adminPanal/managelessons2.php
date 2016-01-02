
<html>
<head>

    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
    <link rel="stylesheet" href="../../../public/dataTable/css/jquery.dataTables.css">




</head>
<body id="adminbody" onload="viewData()">
<div id="adminwrapper">

    <?php include '../includes/admin_navbar.php' ?>

    <div id="adminpage-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin:50px 0px 20px">
                        Manage <small>lessons</small>
                    </h1>
                </div>

                <div class="col-lg-12">
                    <div id = "results"></div>
                    </br>
                    <div id= "lesson_table"></div>





                </div>


            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!--<script src="../../../library/Jquery/jquery.js"></script>-->
    <script src="../../../public/js/ucscvideobay.js"></script>
    <script src="../../../public/dataTable/js/jquery.dataTables.js"></script>


    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <script src="../../../public/js/validation.js"></script>

    <script>

        function viewData(){


            $.ajax({
                type: "GET",
                url: "lessonTable.php"
            }).done(function(data){
                $("#lesson_table").html(data);

            });
        }

        function updatedata(id){

            $('#myModal' + id).on('hidden.bs.modal', function () {
                viewData()

            });


            //get input field values data to be sent to server
            var m_data = new FormData();
            m_data.append( 'id',  id);
            m_data.append( 'Name',  document.getElementById("Name" + id).value);
            m_data.append( 'Lecture', document.getElementById("Lecture" + id).value);
            m_data.append( 'Category', document.getElementById("Category" + id).value);
            m_data.append( 'Type', document.getElementById("Type" + id).value);

            // var user_name = document.getElementById("username").value;
            // var password = document.getElementById("password").value;


            //Ajax post data to server
            $.ajax({
                url: '../../models/updateLessons.php',
                data: m_data,
                processData: false,
                contentType: false,
                type: 'POST',
                dataType:'json',
                success: function(response){
                    //load json data from server and output message
                    if (response.type == "text"){
                        $("#results").html(response.text);
                    }else{
                        $("#results").html(response.text);

                    }
                }
            });



        }


    </script>






</body>
</html>









