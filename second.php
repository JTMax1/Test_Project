<?php
        # This is a single line comment.
        // echo statement Displaying string of text
        echo "Hello World!" ."<br>";



        // Defining a variables.
        $txts = "Hello World";
        $num = 123456789;
        $colors = array("Red", "Green", "Blue");

        //this define constant
        define("SITE_URL", "www.jtmax.com/");

            // Using the constant
            echo "Thank you for visiting - " .SITE_URL ."<br>";

            //Displaying variable values
            echo "The text is - " .$txts ."<br>";
            echo "The number is - " .$num ."<br>";
            echo $colors[0];

            //Displaying HTML code
            echo "<h4>This is a simple heading.</h4>";
            echo "<h4 style='color: red;'>This is a simple heading with style.</h4>";


            //PHP print Statement
            print "<h4>This is a simple heading.</h4>";
            print "<h4 style='color: red;'>This is a simple heading with style.</h4>"; 
?>    