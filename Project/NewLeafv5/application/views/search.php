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
  <div data-role="page" data-theme="a" id="home">
    <div data-role="header">
      <h1 id="header">Home</h1>
      <a class="logout" href="<?php echo base_url(); ?>" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
      <a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
    </div><!-- /header -->

    <div data-role="content">
      <?php
        foreach($Recipes as $Recipe){
          //id of the recipe
          $ID = $Recipe->id;
          //calls the item again using the id so it can load all of the content for the item
          $R = json_decode(file_get_contents("http://api.yummly.com/v1/api/recipe/" . $ID . "?_app_id=" . $UserID . "&_app_key=" . $UserKey . "&images=large"));
          echo $R->attribution->html."<br/>";*/
      ?>
        <!-- image of the food -->
        <div class="recipes">
          <img src="<?php echo $R->images[0]->hostedLargeUrl ?>">
        <br/> -->
      <?php
          //name of the item
          echo $R->name."<br/>";
          if(isset($R->attributes->course)){
            //to list the course that the food is
            echo "course: ".$R->attributes->course."<br/>";
          };
          if(isset($R->attributes->cuisine)){
            //what type of cuisine it is
            echo "cuisine: ";
            $cuisine = $R->attributes->cuisine;
            foreach ($cuisine as $value) {
              echo $value." ";
            }
            echo "<br/>";
          };
          //list all of the ingredients
          $ingredients = $R->ingredientLines;
          echo "ingredients: ";
          echo "<br/>";
          foreach ($ingredients as $value) {
            echo $value."<br/>";
          }
          //how long it takes to cook
          echo "total cook time: ".$R->totalTime."<br/>";
          //number of servings
          echo "number of servings: ".$R->numberOfServings."<br/>";
          //the carb count
          echo "carbs: ".floor($R->nutritionEstimates[6]->value)."Per Serving<br/>";
      ?>
        <!-- to list where the recipe is for full instructions -->
        <a href="<?php echo $R->source->sourceRecipeUrl ?>">For full Recipe</a>
      <?php
      }
  ?>
        <!--<h2>Welcome Back, <?php// echo $this->session->userdata('user_name'); ?>!</h2>-->
    </div><!-- /content -->
  </div><!-- /page -->


</body>
</html>