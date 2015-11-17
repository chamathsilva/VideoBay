<html>
<head>
<title>Search</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
	
	function searchDB(value){
		$.post("searchResults1.php",{searchInput:value},function(data))
			$("#results").html(data);
			
	});
		
		
		
	}

  </script>
</head>

<body>
	<form class="navbar-form" name="search" method="post" action="SearchResults1.php" role="search">
			<input name="search" type="text" id="search" placeholder="Search" onkeyup="searchDB(this.value)"/>
			<input type="submit" name="submit" value="search" >
										
					
	</form>	





</body>