<?php

function url_format($url){
    return str_replace(['560','315'],['340','264'],$url);
}

function videos_search($vid){
    global $con;
    $videoreq = "SELECT * FROM videos WHERE video_id='$vid'";
    $videores = mysqli_query($con, $videoreq);
    $resfinal = mysqli_fetch_assoc($videores);
    $url = $resfinal['url'];
    //$titre = $resfinal['titre'];
    return $resfinal;
}

function user_search($id){
    global $con;
    $userreq = "SELECT * FROM users WHERE user_id='$id'";
    $userres = mysqli_query($con, $userreq);
    $resfinal = mysqli_fetch_assoc($userres);
    //print_r($resfinal);die();
    $user = $resfinal['nickname'];
    //$titre = $resfinal['titre'];
    return $user;
}
