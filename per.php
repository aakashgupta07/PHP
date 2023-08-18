<?php
    $per=$_POST['txt'];
    if($per<40)
    {
        echo"fail";
    }
   else if($per>=40 && $per<=50)
    {
        echo"pass class";
    }
    else if($per>=50 && $per<=60)
    {
        echo"higher second class";
    }
    else if($per>60 && $per<=70)
    {
        echo"first class";
    }
    else if($per>70)
    {
        echo"first class with distinction";
    }
 ?>