<?php

function url_format($url){
    return str_replace(['560','315'],['340','264'],$url);
}

function videos_search($vid){
    global $con;
    $videoreq = mySelect('videos')."WHERE video_id='$vid'";
    $videores = mysqli_query($con, $videoreq);
    $resfinal = mysqli_fetch_assoc($videores);
    $url = $resfinal['url'];
    //$titre = $resfinal['titre'];
    return $resfinal;
}

function user_search($id){
    global $con;
    $userreq = mySelect('users')."WHERE user_id='$id'";
    $userres = mysqli_query($con, $userreq);
    $resfinal = mysqli_fetch_assoc($userres);
    //print_r($resfinal);die();
    $user = $resfinal['nickname'];
    //$titre = $resfinal['titre'];
    return $user;
}

function getnbpages($s=null){
    global $con;
    $req=null;
    /*if($s){
        $req="SELECT * FROM videos WHERE titre LIKE '%$s%'";
    }else{
        $req="SELECT * FROM videos LIMIT $start, 6";
        //die($req);
    }*/
    $req=isset($s)?mySelect('videos','titre','WHERE')."LIKE '%$s%'":mySelect('videos');
    //die($req);
    $nbpages=mysqli_query($con,$req);
    return mysqli_num_rows($nbpages);
}

function mySelect($table, $where=null,$field=null,  $val=null ){

    return 'SELECT * FROM '.$table.' '.$where.' '.$field.' ';

}

function videos($nbpages,$start,$s){
    global $con;
    $start*=6;
    $req=isset($s)?mySelect('videos','titre','WHERE')."LIKE '%$s%' LIMIT $start,6":mySelect('videos')."LIMIT $start,6";
    //die($req);
    $vid= mysqli_query($con,$req);
    afficheVideos($vid);
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

function paginer($nbpages){
    for ($i = 0; $i < $nbpages; $i++) {
        $url="<a href='index.php?start=$i'>".$i.'</a>';
        echo '<li>'.$url.'</li>';
}}
