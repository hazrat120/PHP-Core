<?php
$a = 40;
try{
    if($a > 40){
        throw new Exception("Invalid Nuber!");
    }else{
        throw new Exception("Valid number.");
    }
}
catch(Exception $e){
echo "Your error is " . $e -> getMessage() . ",<br>";
}
finally{
    echo "This is finally done my work";
}

?>