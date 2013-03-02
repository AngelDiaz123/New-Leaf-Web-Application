<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('css/themes/newLeaf.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('css/main.min.css')?>" />
  <link href='http://fonts.googleapis.com/css?family=Didact+Gothic|Merienda' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
<body>

  <div data-role="page" data-theme="a" id="search" class="wrapper">
    <div data-role="header">
      <!-- nav bar -->
      <h1 id="header">Search</h1>
      <a class="home" href="<?php echo base_url('index.php/user'); ?>" rel="external" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
      <a class="logout" href="<?php echo base_url('index.php/user/logout'); ?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
    </div><!-- /header -->

    <div data-role="content">
      <div id="find">
        <!-- sends it to the user search controller. not fully working yet -->
          <?php echo validation_errors('<p class="error">'); ?>
          <?php echo form_open('/search/lookUp', array('data-ajax'=>'false','id'=>"foodSearch")); ?>
            <label for="recipe">Ingrendient or recipe</label>
            <input type="text" id="recipe" name="recipe" value="Rice"/>
            <input type="submit" value="Search for Recipe" />
          <?php echo form_close(); ?>
      </div>

        <div id="results">
          <?php
            if (isset($Recipes)) {
              $UserID = "8df48ce4";
              $UserKey = "8e77b9e52913c5e4a3a4740383dec756";
              //Cycle Through The Recipes and Get full recipe for each
              foreach($Recipes as $Recipe){
                //id of the recipe
                $ID = $Recipe->id;
                //calls the item again using the id so it can load all of the content for the item
                $R = json_decode(file_get_contents("http://api.yummly.com/v1/api/recipe/" . $ID . "?_app_id=" . $UserID . "&_app_key=" . $UserKey . "&images=large"));
            ?>
                <div class="recipes">
                  <?php
                  echo "<h3>".$R->attribution->html."</h3>";
            ?>
              <!-- image of the food -->
                  <img class="recipeImg" src="<?php echo $R->images[0]->hostedLargeUrl ?>"/>
                  <br/>
              <?php
                  //name of the item
                  echo $R->name."<br/>";
                  if(isset($R->attributes->course)){
                    //to list the course that the food is
                    echo "course: ".$R->attributes->course[0]."<br/>";
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
                  if(isset($R->totalTime)){
                    echo "total cook time: ".$R->totalTime."<br/>";
                  }
                  //number of servings
                  echo "number of servings: ".$R->numberOfServings."<br/>";
                  //the carb count
                  if(isset($R->nutritionEstimates[6])){
                    echo "carbs: ".floor($R->nutritionEstimates[6]->value)." Per Serving<br/>";
                  }
              ?>
                <!-- to list where the recipe is for full instructions -->
                <a href="<?php echo $R->source->sourceRecipeUrl ?>">For full Recipe</a>
              </div>
            <?php
          }
        }
        ?>
      </div>
    </div><!-- /content -->
    <script type="text/javascript">
      $(document).ready(function() {

        $('#foodSearch').submit(function() {
          //clears the search results of the previous info when submited
          $('.recipes').each(function(){
            $(this).html('');
          });

        });

      });
    </script>

</body>
</html>