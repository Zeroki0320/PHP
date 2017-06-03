<html>
    <head>
        <meta charset="utf-8">
        <title>Lab 2 Task 2</title>
    </head>
    <body>
        <?php
         $a=0;
         $mathMark = array(70,40,60,50,20,30,10,100,80,90);
            do{
                echo("$mathMark[$a]");
                $a++;
            }while(count($mathMark)>$a);
         $max=0;
         $b=0;
         while($mathmark[$b]>$max){
             $max=$mathMark[$b];
             $b++;
         }
        echo("maximum num is $max");
        $min=0;
        $c=0;
        for($i=0 ; $i<10 ; $i++){
            if($min < $mathMark[$i]){
                $min = $mathMark[$i];
            }
        }
        echo("minimun num is $min");
        ?>
    
    </body>
</html>