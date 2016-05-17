<?php
/**
 * Created by PhpStorm.
 * User: Tiny
 * Date: 2016/5/10
 * Time: 23:09
 */


function makeImg($str, $dir="Upload/cover"){
    $time = time();
    $s = base64_decode(str_replace('data:image/png;base64,', '', $str));
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
    file_put_contents('Upload/cover/'.$time.'.jpg',$s);
    $url = '/Upload/cover/'.$time.'.jpg';
    return $url;
}

function getCalendar($date) {
    if (empty($date)) {
        $date = time();
    }

    $year = date("Y", $date);
    $month = date("M", $date);


    $week = "<thead>
			<tr>
				<th scope='col' title='Monday'>M</th>
				<th scope='col' title='Tuesday'>T</th>
				<th scope='col' title='Wednesday'>W</th>
				<th scope='col' title='Thursday'>T</th>
				<th scope='col' title='Friday'>F</th>
				<th scope='col' title='Saturday'>S</th>
				<th scope='col' title='Sunday'>S</th>
			</tr>
			</thead>";

    $head = "<caption>".$month." ".$year."</caption>";

    $total_day = date("t", $date);

    $first_day = mktime('0', '0', '0', date("n", $date), '1', $year);

    $week_offset = date("N", $first_day) - 1;

    $calendar = "<tbody>";
    for ($i = 1; $i <= $total_day; $i++) {

        if (($i + $week_offset) % 7 == 1) {
            $calendar .= "<tr>";
        }

        if ($i == 1) {
            $calendar .= "<tr>";
            for ($j = 0; $j < $week_offset; $j++) {
                $calendar .= "<td><span></span></td>";
            }
        }
        $calendar .= "<td><span>".$i."</span></td>";

        if (($i + $week_offset) % 7 == 0) {
            $calendar .= "</tr>";
        }

    }

    $calendar = "<table>" . $head . $week . $calendar . "</table>";

    return $calendar;
}