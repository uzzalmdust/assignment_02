<?php
//Even number for for loop
    function evenFor($start, $end){
        for($start; $start<=$end; $start++){
            if($start%2==0){
                echo $start . PHP_EOL;
            }
        }   
    }

    evenFor(1,20);


//Even number for while loop

    function evenWhile($start, $end){
        while($start<=$end){
            if($start%2==0){
                echo $start . PHP_EOL;
            }

            $start++;
        }   
    }

    echo evenWhile(1,20);



//Even number for do while loop

function evenDoWhile($start, $end){
    do{
        if($start%2==0){
            echo $start . PHP_EOL;
        }

        $start++;
    }while($start<=$end); 
}

echo evenDoWhile(1,20);







