<?php
    $num= array(313, 72, 500, 700, 12, 6000);
    //$num= array(0, -2, -4);
    //$num= array();
    //$num= 42;


    $max= maximum($num);

    if($max === false)
        print 'آرایه خالی میباشد';
    else if($max =='no')
        print 'متغیر مورد نظراز نوع آرایه نمیباشد';
    else
        print "max= $max";


    function maximum($numbers)
    {
        if(  is_array($numbers) == false)
            return 'no';

        $cnt= count($numbers);

        if(!$cnt )
            return false;

        $max= $numbers[0];
        for ($i=1; $i< $cnt; $i++)
        {
            //echo $i . '=' . $numbers[$i] . '<br>';

            if($max < $numbers[$i])
                $max = $numbers[$i];

        }

        return $max;
    }
?>