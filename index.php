<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random Quote</title>
    </head>
    <body>
        <?php

       $QuoteArray = array (
            "All happiness depends on a leisurely breakfast. - John Gunther",
            "As long as you live, keep learning how to live. - Seneca",
            "It is not doubt but certainty that drives you mad." ,
            "You could be good today. But instead, you choose tomorrow.",
            "Save when you can and not when you have to.",
            "If you have good habits, time becomes your ally. All you need is patience. - James Clear",
            "Don’t postpone joy until you have learned all of your lessons. Joy is your lesson. - Alan Cohen",
            "The things you think about determine the quality of your mind. Your soul takes the color of your thoughts.",
            "The chains of habit are too weak to be felt until they are too strong to be broken.",
            "We don't rise to the level of our expectations, we fall to the level of our training. - Archilochus"
        );
            echo " <h1> " .$QuoteArray[array_rand( $QuoteArray)] . "</h1>";
        ?>
       <form action="" method = "GET">
             <button  type = "submit"> generate the quote </button>
       </form>
    </body>
</html>