<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('css/themes/newLeaf.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('css/main.css')?>" />
  <link href='http://fonts.googleapis.com/css?family=Didact+Gothic|Merienda' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
<body>

  <div data-role="page" data-theme="a" id="search">
    <div data-role="header">
      <h1 id="header">Search</h1>
      <a class="home" href="<?php echo base_url('index.php/user'); ?>" rel="external" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
      <a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
    </div><!-- /header -->

    <div data-role="content">
      <div id="find">
        <!-- sends it to the user search controller. not fully working yet -->
        <div data-role="fieldcontain">
          <label for="amount">Amount of results</label>
          <input type="number" id="amount" name="amount" step="5" max="30" />
          <label for="recipe">Type of recipe</label>
          <input type="text" id="recipe" name="recipe" />
          <input id="callAjax" type="button" value="Call Ajax" />
        </div>
        <div id="results"></div>
      </div>
    </div><!-- /content -->

  <script type="text/javascript">
    $(document).ready(function() {
      <?php header('Access-Control-Allow-Origin: *'); ?>
      
      $("#callAjax").click(function() {
        var amount = $('#amount').val();
        var item = $('#recipe').val();
        var UserID = "8df48ce4";
        var UserKey = "8cd7a6e481ed131a46f76615295f2a92";

        $.ajax({
          type: "POST",
          url: "http://api.yummly.com/v1/api/recipes?_app_id="+UserID+"&_app_key="+UserKey+"&maxResult="+amount+"&requirePictures=true&q="+item,
          dataType: 'xml',
          success: onSuccess
        });
 
            $("#resultLog").ajaxError(function(event, request, settings, exception) {
              $("#resultLog").html("Error Calling: " + settings.url + "<br />HTTP Code: " + request.status);
            });
 
            function onSuccess(data)
            {
                console.log(data);
            }

        });
    });
  </script>

</body>
</html>