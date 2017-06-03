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
         echo ("Today is $today[mday] $today[month] $today[year] <br />");
         if ($today['mon']==2){
             if(0 == $year % 4 and 0 != $year % 100 or 0 == $year % 100 ){
                 $day = 29;
             }else{
                 $day = 28;
             }else if($today['mon'] == 4 ||$today['mon'] == 6||$today['mon'] == 9||today['mon'] == 11){
                 $day = 30;
             }else{
                 $day = 31;
             }
             }
        echo("$today[month] has $day days")
        ?>
    </body>
</html>