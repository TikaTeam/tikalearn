<?php
    //$str= array('ali', 'reza', 'tika', 'trita');
    $str= array('ali', 12, 'tika', 'trita');

    //print_r($str);
    //var_dump($str);
    //exit;


    $find= search('mehdi', $str);
    if($find===false)
        echo 'عبارت موردنظر یافت نشد';
    else
        echo "عبارت موردنظر در اندیس $find یافت شد";

    function search($item, $strings)
    {
        $cnt= count($strings);
        for ($i=0; $i< $cnt; $i++)
        {
            if($item== $strings[$i])
                return $i;
        }

        return false;
    }
?>