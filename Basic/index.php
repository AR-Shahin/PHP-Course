<?php

// throw new Exception("Custom Errror");

try{
    // Anything 
    echo 10/ 0;

}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "Finally work";
}