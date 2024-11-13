
<?php
    
    $indexArray = [78, 69, 81, 55, 93, 46];


    //foreach loop
    echo "foreach loop <br>";

    foreach($indexArray as $element){
        echo $element. "<br>";
    }

    //while loop
    echo "while loop <br>";

    $i = 0;

    while($i<=5){
        echo $indexArray[$i]."<br>";
        $i++;
    }

    //do while loop
    echo "do while loop <br>";

    $j = 0;

    do{
        echo "<h1>".$indexArray[$j]."</h1>". "<br>";
        $j++;
    }

    while($j<=5);

    // Conditional Statement
    echo "<h1> Conditional statement"."</h1>"."<br>";

    $marks = 79;

    if($marks>=80){
        echo "The grade is A+"."<br>";
    }

    elseif($marks>=70){
        echo "The grade is A"."<br>";
    }

    elseif($marks>=60){
        echo "The grade is A-"."<br>";
    }

    elseif($marks>=50){
        echo "The grade is B"."<br>";
    }

    elseif($marks>=40){
        echo "The grade is C"."<br>";
    }

    elseif($marks>=33){
        echo "The grade is D"."<br>";
    }

    elseif($marks<33){
        echo "The grade is F"."<br>";
    }
    
 // Loop conditional

 echo "<h1> Loop conditional"."</h1>"."<br>";

    $numbers = [38, 45, 56, 69, 84, 99, 120, 135, 148, 160];

    for ($i=0; $i<=9; $i++){
        if($numbers[$i]%2 == 0){
            echo "Even Number=".$numbers[$i]."<br>";
        }
        else{
            echo "Odd Number=".$numbers[$i]."<br>";
        }
    }