<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
     <title>Lab 1 Task 6</title>    
    </head>
    <body>
        <?php
            $today = getdate(time());
            $year = $today['year'];
        echo("Today is $today[mday] $today[month] $today[year] <br />");
        switch($today['mon']){
            case 2:
                if ( 0 == $year %4 and 0!= $year %100 or 0== $year % 400)
                    $day = 29;
                else
                    $day = 28;
                break;
            case 4: case 6: case 9: case 11:
                $day = 30;
                break;
            default:
                $day = 31;
        };
        echo("$today[month] has  $day days")
        
        ?>
    </body>
</html>