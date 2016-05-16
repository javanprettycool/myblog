<?php
/**
 * Created by PhpStorm.
 * User: Tiny
 * Date: 2016/5/10
 * Time: 23:09
 */

// ндубкУбтм╪
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