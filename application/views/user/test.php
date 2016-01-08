
<html xmlns="http://www.w3.org/1999/html">
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

    <link rel="stylesheet" href="../../../public/css/animate.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="../../../public/js/validation_core.js"></script>

</head>

<body>


<h1>Chamath</h1>


<form  style="background-color: #ffffff" method="POST" action="" id="contact-form" class="form-horizontal" >

    <!-- Checkbox -->


    <div class="control-group">
        <label class="control-label" for="audience">Select audience(Select all that apply)</label>
        <div>
            <input type="checkbox" name="audience[]" value="Students">Students<br>
            <input type="checkbox" name="audience[]" value="Alumni">Alumni<br>
            <input type="checkbox" name="audience[]" value="Business">Business<br>
            <br>
        </div><!-- close controls -->
    </div> <!-- close control group -->




    <!-- Checkbox -->
    <div class="control-group">
        <label class="control-label" for="event_services">What type of services do you see needing for this event? (Select all that apply)</label>
        <div>
            <div class="checkbox">
                <label><input type="checkbox" id="ucsc" class="ch"  name="event_services[]" value="op1">Option 1</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox"  class="ch" name="event_services[]" value="op2">Option 2</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox"  class="ch" name="event_services[]" value="op3" >Option 3</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox"  class="ch" name="event_services[]" value="op4">Option 4</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox"  class="ch" name="event_services[]" value="op5">Option 5</label>
            </div>
            <div class="checkbox ">
                <label><input type="checkbox"  class="ch" name="event_services[]" value="op6" >Option 6</label>
            </div>
        </div><!-- close controls -->
    </div> <!-- close control group -->

    <div class="form-actions">
        <button type="submit" onclick="test()" class="btn btn-primary btn-large">Submit</button>
        <!-- <button class="btn">Cancel</button> -->
    </div>
    </div> <!-- close specific_request_type -->



</form>
<hr> <!---------------------------------------------------------------------->
<form>
    <h3>Select your favorite sports:</h3>
    <div class="checkbox ">
        <label><input type="checkbox" value="football" name="sport"> Football</label>
    </div>
    <label><input type="checkbox" value="baseball" name="sport"> Baseball</label>
    <label><input type="checkbox" value="cricket" name="sport"> Cricket</label>
    <label><input type="checkbox" value="boxing" name="sport"> Boxing</label>
    <label><input type="checkbox" value="racing" name="sport"> Racing</label>
    <label><input type="checkbox" value="swimming" name="sport"> Swimming</label>
    <br>
    <button  id="b1" type="button">Get Values</button>


    <h3>Select your favorite fruit</h3>
    <label><input type="checkbox" value="apple" name="fruit"> apple</label>
    <label><input type="checkbox" value="orange" name="fruit"> orange</label>
    <label><input type="checkbox" value="banana" name="fruit"> banana</label>
    <label><input type="checkbox" value="kota" name="fruit"> kota</label>
    <label><input type="checkbox" value="ura" name="fruit"> ura</label>
    <label><input type="checkbox" value="diga" name="fruit"> diga</label>
    <br>
    <button id = "b2"type="button">Get Values</button>
</form>

<script type="text/javascript">
    $(document).ready(function() {
        $("#b1").click(function(){
            var favorite = [];
            $.each($("input[name='sport']:checked"), function(){
                favorite.push($(this).val());
            });
            alert("My favourite sports are: " + favorite.join(", "));
        });


        $("#b2").click(function(){
            var favorite = [];
            $.each($("input[name='fruit']:checked"), function(){
                favorite.push($(this).val());
            });
            alert("My favourite fruits are: " + favorite.join(", "));
        });
    });
</script>

<hr> <!---------------------------------------------------------------------->
<hr> <!---------------------------------------------------------------------->

<form id="myform">
    <label for="field">Required, audio files only: </label>
    <input type="file" class="left" id="field" name="field">
    <br/>
    <input type="submit" value="Validate!">

</form>

<script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    $( "#myform" ).validate({
        rules: {
            field: {
                required: true,
                extension: "xls|csv|jpeg|txt|mp4|JPG|"
            }
        }
    });
</script>

<hr> <!---------------------------------------------------------------------->




<script>
    $(document).ready(function(){





        $('#contact-form').validate({
            rules: {

                "audience[]": {
                    required: true,
                    minlength: 2
                }, // end checkbox

                "event_services[]": {
                    required: true,
                    minlength: 1
                } // end checkbox

            },
            messages: {

                "audience[]": "please Select One Checkbox",

                "event_services[]": "please Select One Checkbox"


            },
            highlight: function(label) {
                $(label).closest('.control-group').addClass('error');
            },
            success: function(label) {
                label
                    .text('OK!').addClass('valid')
                    .closest('.control-group').addClass('success');
            }

        });

    }); // end document.ready

    function test(){
        if ($('#ucsc').is(":checked")){
            alert($('#ucsc').is(":checked"));

        }

    }

</script>





</body>
</html>

