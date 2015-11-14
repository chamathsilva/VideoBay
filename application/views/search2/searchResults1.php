<html>
<body>

<?php

include "../../configs/core/init.php" ;

$keyWord = $_POST['search'];


if(empty($keyWord)) {

	 echo "Enter a keyword";
}

else {
	//$link= new PDO ('mysql:host=localhost;dbname=search','root','');
	//$search_sql="SELECT * FROM lesson WHERE description LIKE '%".$_POST['search']."%' OR category LIKE '%".$_POST['search']."%' " ; 
	//$result =$link->query($search_sql);
	//$num_rows=$result->fetch();

	$db = DB::getInstance();
	$data =$db->Search($keyWord);

	if($data) == 0){
		echo "No results found"; }
	
	else{
		foreach ($data as $rows ) {
			echo $rows['name']." <br>" ;}
}
	


}



?>


</body>
</html>
