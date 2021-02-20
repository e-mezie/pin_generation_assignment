<?php

//This line of code tells the while loop to start counting from 1
$pin = 1;

//this line of code prints what we're about doing at the top of the page
echo 'This Generates A 15 Digit Pin For A Telecommunication Company' ,'<br>';

//this line of code is the condition given to the while loop
while ($pin <= 200){

    //this line of code prints out random 15 digits numbers for the 200 employees on each line
    echo(rand(000000000000000,100000000000000). ' this is the ');
    
    
    //this line of code prints out the pin$pin number as a form of id as to whom the just generated code is going to
    echo $pin.' pin'. '<br>';
    
    //this is the incremental value that helps us add to the number of staffs until it gets to the desired pin$pin strength 
    //in the condition, which is 2000
    $pin++;
}//end of whike loop


?>