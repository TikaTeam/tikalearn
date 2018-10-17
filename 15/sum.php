<?php
    $num= array(313, 3);


    echo sum($num);


    function sum($numbers)
    {
        $cnt= count($numbers);

        $sum=0;
        for ($i=0; $i< $cnt; $i++)
        {
            $sum += $numbers[$i];

        }

        return $sum;
    }
?>