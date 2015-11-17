<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit_btn").click(function() {

                var proceed = true;
                //simple validation at client's end
                //loop through each field and we simply change border color to red for invalid fields
                $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
                    $(this).css('border-color','');
                    if(!$.trim($(this).val())){ //if this field is empty
                        $(this).css('border-color','red'); //change border color to red
                        proceed = false; //set do not proceed flag
                    }


                });

                if(proceed) //everything looks good! proceed...
                {
                    //get input field values data to be sent to server
                    var m_data = new FormData();
                    m_data.append( 'lessonname', $('input[name=lessonName]').val());
                    m_data.append( 'lecture', $('input[name=lecture]').val());
                    m_data.append( 'Description', $('textarea[name=description]').val());
                    m_data.append( 'category', $('select[name=category]').val());
                    m_data.append( 'userLevel', $('select[name=UserLevel]').val());


                    //Ajax post data to server
                    $.ajax({
                        url:'upload_description.php',
                        data: m_data,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        dataType:'json',
                        success: function(response){
                            //load json data from server and output message
                            if(response.type == 'error'){ //load json data from server and output message
                                output = '<div class="error">'+response.text+'</div>';
                            }else{
                                output = '<div class="success">'+response.text+'</div>';
                            }
                            $("#contact_form #contact_results").hide().html(output).slideDown();
                        }
                    });

                }
            });

            //reset previously set border colors and hide all message on .keyup()
            $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
                $(this).css('border-color','');
                $("#result").slideUp();
            });
        });
    </script>
</head>
<body id="adminbody">
<div id="adminwrapper">

    <?php include '../includes/admin_navbar.php' ?>

    <div id="adminpage-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin:50px 0px 20px">
                        Add lesson <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> add lesson
                        </li>
                    </ol>
                </div>

                <div class="form-style" id="contact_form">
                    <div id="contact_body">
                        <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="lessonName" id="inputEmail3" placeholder="Lesson Name" required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Lecture</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="lecture" id="inputPassword3" placeholder="Password" required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" name="description" placeholder="Description" required="true"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category">
                                            <option value="">Select Category</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">User Level</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="UserLevel">
                                            <option value="">Select User level</option>
                                            <option>UCSC only</option>
                                            <option>BIT only</option>
                                            <option>Public</option>
                                            <option>UCSC & BIT only</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit"  id="submit_btn">Upload</button>
                                    </div>
                                </div>


                        </div>
                        <div class="col-lg-6">
                            <h3>Result</h3>
                            <div id="contact_results"></div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>
</div>
<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script-->
<!--script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script-->
<!--<script src="../../../library/Jquery/jquery.js"></script>-->
<!--script src="../../../public/js/ucscvideobay.js"></script-->
</body>
</html>









