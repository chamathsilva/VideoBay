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
                        //check invalid email
                        var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                            $(this).css('border-color','red'); //change border color to red
                            proceed = false; //set do not proceed flag
                        }
                    });

                    if(proceed) //everything looks good! proceed...
                    {
                        //get input field values data to be sent to server
                        var m_data = new FormData();
                        m_data.append( 'user_name', $('input[name=name]').val());
                        m_data.append( 'user_email', $('input[name=email]').val());
                        m_data.append( 'country_code', $('input[name=phone1]').val());
                        m_data.append( 'phone_number', $('input[name=phone2]').val());
                        m_data.append( 'subject', $('select[name=subject]').val());
                        m_data.append( 'msg', $('textarea[name=message]').val());

                        //Ajax post data to server
                        $.ajax({
                            url: 'contact_me.php',
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
    <?php include '../includes/admin_navbar.php' ?>
        <div id="adminwrapper">

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
                            <div class="form-style-heading">Please Contact Us</div>
                            <div id="contact_results"></div>
                            <div id="contact_body">
                                <div class="col-lg-6">



                                <label><span>Name </span>
                                    <input type="text" name="name"  required="true" />
                                </label>
                                <label><span>Email </span>
                                    <input type="email" name="email" required="true"/>
                                </label>
                                <label><span>Phone</span>
                                    <input type="text" name="phone1" maxlength="4" placeholder="+91"  required="true" class="tel-number-field"/>&mdash;<input type="text" name="phone2" maxlength="15"  required="true" class="tel-number-field long" />
                                </label>
                                <label for="subject"><span>Regarding</span>
                                    <select name="subject" class="select-field">
                                        <option value="General Question">General Question</option>
                                        <option value="Advertise">Advertisement</option>
                                        <option value="Partnership">Partnership Oppertunity</option>
                                    </select>
                                </label>
                                <label for="field5"><span>Message <span class="required">*</span></span>
                                    <textarea name="message" id="message" class="textarea-field" required="true"></textarea>
                                </label>


                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit"  id="submit_btn">Upload</button>
                                </div>





                            </div> <!-- end of the col-lg-6-->




                            <div class="col-lg-6">
                                <h3>Result</h3>
                                <div id="contact_results"></div>
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









