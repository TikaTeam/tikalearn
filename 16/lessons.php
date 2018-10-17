<?php
    $data= array(
        array('ریاضی', 15, 3),
        array('زبان', 16, 2),
        array('تربیت بدنی', 18, 1),
        array('فیزیک', 16, 3)
    );

    echo draw($data);

    $res= result($data);

    echo "مجموع نمرات= " . $res[0]. '<br>';
    echo "مجموع ضرایب= " . $res[1]. '<br>';
    echo "معدل= " . $res[2]. '<br>';

    function result($arr)
    {
        $row_cnt= count($arr);
        $sum=0;
        $sum_coe=0;
        for ($i=0; $i<$row_cnt; $i++) {
            $score= $arr[$i][1];
            $coe= $arr[$i][2];
            $sum += $score * $coe;
            $sum_coe+=$coe;
        }

        return array( $sum, $sum_coe, $sum/$sum_coe) ;
    }
    function draw($arr)
    {
        $row_cnt= count($arr);
        $col_cnt= count($arr[0]);

        $out='<table border="1">
            <tr>
                <td>نام درس</td>
                <td>نمره</td>
                <td>ضریب</td>
            </tr>
            ';
        for ($i=0; $i<$row_cnt; $i++)
        {
            $name= $arr[$i][0];
            $score= $arr[$i][1];
            $coe= $arr[$i][2];

            $out .="
            <tr>
                <td>$name</td>
                <td>$score</td>
                <td>$coe</td>
            </tr>
            ";

        }
        $out .='</table>';

        return $out;

    }