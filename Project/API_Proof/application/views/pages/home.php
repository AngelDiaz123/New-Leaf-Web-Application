<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Leaf - Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/themes/newLeaf.min.css" />
	<link rel="stylesheet" href="../css/main.css"/>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile.structure-1.3.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js"></script>
</head>
<body>
	<!-- Start of first page -->
<div data-role="page" id="home">
	<?php
		//Empty Array to hold all the recipes
		$UserID = "8df48ce4";
   		$UserKey = "8e77b9e52913c5e4a3a4740383dec756";
   		//loads one of the requested items
		$Recipes = file_get_contents("http://api.yummly.com/v1/api/recipes?_app_id=".$UserID."&_app_key=".$UserKey."&maxResult=1&requirePictures=true&q=Rice");
		//Decode the JSON into a php object
   		$Recipes = json_decode($Recipes)->matches;
   		//Cycle Through The Recipes and Get full recipe for each
   		foreach($Recipes as $Recipe)
   		{
   			//id of the recipe
   			$ID = $Recipe->id;
   			//calls the item again using the id so it can load all of the content for the item
   			$R = json_decode(file_get_contents("http://api.yummly.com/v1/api/recipe/" . $ID . "?_app_id=" . $UserID . "&_app_key=" . $UserKey . "&images=large"));
   			echo $R->attribution->html."<br/>";
   		?>
   			<!-- image of the food -->
   			<img src="<?php echo $R->images[0]->hostedLargeUrl ?>">
   			<br/>
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
   			echo "carbs: ".floor($R->nutritionEstimates[6]->value)."<br/>";
   		?>
   			<!-- to list where the recipe is for full instructions -->
   			<a href="<?php echo $R->source->sourceRecipeUrl ?>">For full Recipe</a>
   		<?php
	    }
	?>


</body>
</html>