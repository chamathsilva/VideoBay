

<html>
  <head>
  <title>My Now Amazing Webpage</title>
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
  </head>
  <body>

  <div class="variable-width">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.variable-width').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
      });
    })
  </script>

  </body>
</html>