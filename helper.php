<?php

class helper
{
    public static function debug($data) {
    $output = $data;
    if (is_array($output)){
        $output = implode(',', $output);
    }

    echo "<script>console.log('Debug: " . $output . "' );</script>";
    }
}
