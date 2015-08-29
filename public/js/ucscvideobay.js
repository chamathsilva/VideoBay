$(document).ready(function(){
    $("#registration").click(function(){
    url = "registration.php";
      $( location ).attr("href", url);
      return false;
        
    });
    $("#show").click(function(){
        $("p").show();
    });

	$(".show-video").colorbox({iframe:true, innerWidth:650, innerHeight:390});

});