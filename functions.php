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

function displayVideos($s, $start){
    global $con;
    $req=null;
    if($s){
        $req="SELECT * FROM videos WHERE titre LIKE '%$s%'";
    }else{
        $req="SELECT * FROM videos LIMIT $start, 6";
        //die($req);
    }

    $videos=mysqli_query($con,$req);
    return $videos;
}

function afficheVideos($videos)
{

    while ($v = mysqli_fetch_assoc($videos)) {
        miniaturevideo($v);
    }

}

function miniaturevideo(array $v){
    echo '<div class="col-md-4 mt-3">' .
        url_format($v["url"]) . '
                <div style="margin-top: -9px">
                   <a href="lecteur.php?id=' . $v["video_id"] . '">' . substr($v["titre"], 0, 40) . '...</a>
                </div>
            </div> ';
}
