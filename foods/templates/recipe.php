<!-- This file contains the recipe page, which shows a recipe info -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../stylesheets/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css">
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

        <title>Makweba's | Recipe</title>
    </head>

    <body>
        <?php 
            include("../scripts/php/handle_loading-expired.php");
            include("sharedElements/navbars/navbar2.php");
            // When loading the page a new recipe is taken from the database
            include("../scripts/php/handle_recipe.php"); 
        ?>
        
            <div class="recipe-content">
                <div class="recipe-container">
                <?php
                    echo('<h2 hidden>'.$recipe_data['id'].'</h2>'); 
                    echo('<img src="'.$recipe_data['img_url'].'" class="food">');
                    echo('<h1 class="purple"><em>'.$recipe_data['name'].'</em></h1>');
                    echo('<h2><span class="light-purple"> Reviews: </span>'.$recipe_data['review_nums'].'&emsp;<span class="light-purple"> Score: </span>'.round($recipe_data['aver_rate'], 1).'</h2>'); 
                ?>
                <h3 class="light-purple"> Ingredients:</h3>
                <p>
                    <?php 
                        for ($i = 0; $i < count($ingredients); $i++ ){
                            if ($i == 0) { echo (ucfirst($ingredients[$i]).', '); }
                            else if ($i != count($ingredients) - 1) {  echo ($ingredients[$i].', '); }
                            else { echo ($ingredients[$i].'.'); }
                        }
                    ?>
                </p>
                     <h3 class="light-purple"> Cooking directions:</h3>           
                <p>
                    <?php echo($replaced_cooking_directions); ?>
                </p>
                <form action="recipe.php" method="post">
                    <input type="submit" class="button show-recipe-2" value="Show another recipe" name="show" id="show">
                </form>
            </div>
        </div>
        
        <?php include("sharedElements/footer.php"); ?>
    </body>
</html>