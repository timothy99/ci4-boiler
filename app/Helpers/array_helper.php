<?php

function is_empry_stdclass($stdclass)
{
    $stdclass_arr = (array)$stdclass;

    $return_class = "";
    $is_empty = empty($stdclass_arr);
    if ($is_empty == true) {
        $return_class = "";
    } else {
        $return_class = $stdclass;
    }

    return $return_class;
}