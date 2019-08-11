<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Calendar</title>
    </head>
    
    <body>
        <form action="calendar.php" method="post"></form>
        
        <?php
        // Months array
        $months = [ 1 => "January", 'February', 'March',
            'April', 'May', 'June', 'July', 'August',
            'September', 'October', 'November', 'December'];
        
        // Make days and years array
        $days = range(1, 31);
        $years = range(1900, 2100);
        
        
        // Make the months pull-down menu.
        echo '<select name="month">';
        foreach($months as $key => $value){
            echo "<option value=\"$key\">$value</option>\n";
        }
        echo '</select>';
        
        
        // Make the days pull-down menu.
        echo '<select name="day">';
        foreach($days as $value){
            echo "<option value=\"$value\">$value</option>\n";
        }
        echo '</select>';
        
        // Make the days pull-down menu.
        echo '<select name="year">';
        foreach($years as $value){
            echo "<option value=\"$value\">$value</option>\n";
        }
        echo '</select>';      
        ?>
    </body>
</html>
