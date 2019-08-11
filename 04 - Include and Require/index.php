<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Calendar</title>
    </head>
    
    <body>
        <h1>This is the title.</h1>
        <p>This is the paragraph.</p>
        
        
        <?php
        include "test.php"; // require "test.php"; 
        //path can be a relative or absolute path. Use "../" to go one folder up from the current folder for relative path management.
        ?>
        
        <?php
        include "new-test.php"; // because the file does not exist it will give a warning but it will continue to execute the rest of the script.   
        ?>
        
        <p>HTML file continues...</p>
        
        <?php
        require "new-test.php"; // because the file does not exist it will give a warning and WILL NOT EXECUTE the rest of this HTML file.  
        ?>
        
        <p>Cannot execute this part...</p>
        
        <!-- There is also require_once and include_once. These will include the script in it once only. --> 
        
    </body>
</html>
