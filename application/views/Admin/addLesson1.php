<html>
<head>
<title>body1</title>

<?php include ('../includes/link.php');
?>

<link rel="stylesheet" type="text/css" href="../../../public/css/ucscvideobay.css">
</head>
<body>
<?php include ('link.php');
?>
<div class="col-md-3">
<div class="ui-grid-b ui-responsive">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
	</div>

<h5>ADD lesson+</h5>
</div>
<h5>
Lesson Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="LName" value=""><br><br><br>
Lesson Discription: &nbsp
<textarea rows="5" cols="40">

</textarea><br><br>
Lecturer Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="LecName" value=""><br><br><br>
<div class="row">
            <div class="col-xs-6">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Category:  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Data Base</a></li>
                            <li><a href="#">Algorithm</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Java</a></li>
                        </ul>
                    </div>
                    <input type="text" class="form-control"><br>
                </div>
            </div>
<div class="row">
<div class="col-xs-6">
&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn btn-default">Cancel</button>
    <a href="uploadLesson2.php"><button type="button" class="btn btn-primary">Next</button></a>
</div>
</div>

</h4>

</div>
</div>