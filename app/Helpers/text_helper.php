<?php

// 줄바꿈 html 특수기호( &#13; 과 &#10; 만 묶어서 br로 변경)
function nl2br_only($input_text)
{
    $output_text = str_replace("&#13;&#10;", "<br />", $input_text);

    return $output_text;
}
