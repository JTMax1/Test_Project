<!-- this is an implementation of HTML into PHP -->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Simple PHP File</title>
</head>
<body>
    <h1> 
        

        <?php
        # This is a single line comment, nothing more
        echo "Hello World! <br>";



        // Declaring a variables.
        $txt = "Hello World";
        $number = 10;

        //this define constant
        define("SITE_URL", "www.jtmax.com/");

            // Using the constant
            echo "Thank You for visiting - " .SITE_URL . "<br>";

            //Displaying variable values
            echo "The text is - " .$txt . "<br>";
            echo "The number is - " .$number . "<br>";
        
        ?>
    
    </h1>
</body>
</html>