
<html>
<head>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>



    <script>

        function test(){
            $('#myForm').ajaxSubmit({
                beforeSubmit:  beforeSubmit,
                success: function(data) {
                    alert("Thank you for your comment!" + data);
                }

            });
            return false;

        }

        function beforeSubmit(){
            $('#new').html("43434343");
            alert("hello --->");

        }

    </script>
</head>
<body>

<div id="new"></div>
<form role="form" id="myForm" action="server_side.php" method="post">
    <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname">
    </div>
    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname">
    <input type="checkbox" id = "vehicle" name="vehicle" value="Bike"> I have a bike<br>

    <div class="g-recaptcha" data-sitekey="6LcvnRQTAAAAAHkGCwQ_9vNBTHYYepbV9HPcimuq"></div>
    <input  type="button" onclick="test()"   value="Submit Comment" />
</form>




</body>
</html>
