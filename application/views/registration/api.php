<html>

<head>

   <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap-theme.min.css">
   <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
</head>



<body id="adminbody">
<div id="adminwrapper">

   <?php include '../includes/admin_navbar.php' ?>
   <div id="adminpage-wrapper">


      <div class="wrapper" >

         <div class="container">
            <div class="row">
               <div class="col-sm-7 text ">
                  <br><br>



                  <form action="uploadfile.php" method="post" enctype="multipart/form-data">
                     <p>
                        <label for="file">Select a file:</label> <input type="file" name="fileToUpload" id="fileToUpload"> <br />
                        <input type="submit" value="BULK REGISTER" name="submit"/>
                     <p>
                  </form>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>


</body>
</html>




