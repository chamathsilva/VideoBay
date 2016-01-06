
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    <script>
        // wait for the DOM to be loaded
        $(document).ready(function() {
            // bind 'myForm' and provide a simple callback function


        });

        function test(){
            $('#myForm').ajaxSubmit({
                success: function(data) {
                    alert("Thank you for your comment!" + data);
                }
            });
            return false;

        }
    </script>
</head>
<body>


<form id="myForm" action="server_side.php" method="post">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname">

    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname">


    <input type="checkbox" id = "vehicle" name="vehicle" value="Bike"> I have a bike<br>



    <input  type="button" onclick="test()"   value="Submit Comment" />
</form>




</body>
</html>
