<?php
    $num= array(19, 20, 10, 16, 18);

    echo avg($num);


    function avg($numbers)
    {
        $cnt= count($numbers);

        $sum=0;
        for ($i=0; $i< $cnt; $i++)
        {
            $sum += $numbers[$i];
        }

        return $sum/$cnt;
    }
?>