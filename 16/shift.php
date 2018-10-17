<?php
    $data= [5, 12, 14, 72, 313];


   /* print_r($data);
    echo '<br>';
    $data= shift_right($data);
    print_r($data);

    echo '<br>';
    $data= shift_right($data);
    print_r($data);
*/
   echo draw2($data);

   /*$data= shift_right2($data);
    echo draw($data);

    $data= shift_right2($data);
    echo draw($data);
    $data= shift_right2($data);
    echo draw($data);

    $data= shift_right2($data);
    echo draw($data);*/

    function shift_right($arr)
    {
        $cnt = sizeof($arr);

        for ($i = $cnt-2 ; $i>=0; $i--)
        {
            $arr[$i+1] = $arr[$i];

        }
        $arr[0]=' - ';
        return $arr;
    }

    function shift_right2($arr)
    {
        $cnt = sizeof($arr);
        $temp= $arr[$cnt -1];
        for ($i = $cnt-2 ; $i>=0; $i--)
        {
            $arr[$i+1] = $arr[$i];

        }
        $arr[0]=$temp;
        return $arr;
    }

    function draw($arr)
    {
        $cnt = sizeof($arr);

        $out= "<table border='1'><tr>";

        for ($i=0; $i<=$cnt-1; $i++) {
            $out .= "<td>" . $arr[$i] . "</td>";
        }

        $out .= "</tr></table>";
        return $out;
    }

    function draw2($arr)
    {
        $cnt = sizeof($arr);
        $out= "<table border='1'>";

        for ($i=0; $i<=$cnt-1; $i++) {
            $out .= "<tr><td>" . $arr[$i] . "</td></tr>";
        }

        $out .= "</table>";
        return $out;
    }



    ?>


