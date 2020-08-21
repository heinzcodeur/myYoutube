<?php

function url_format($url){
    return str_replace(['560','315'],['340','264'],$url);
}

function formatUrl($url){

    return trim(str_replace("'","\'",$url));
}

function videos_search($vid){
    global $con;
    $videoreq = mySelect('videos','video_id','=',$vid);
    $videores = mysqli_query($con, $videoreq);
    $resfinal = mysqli_fetch_assoc($videores);
    $url = $resfinal['url'];
    return $resfinal;
}

function user_search($id){
    global $con;
    $userreq = mySelect('users','user_id', '=',$id);//die($userreq);
    $userres = mysqli_query($con, $userreq);
    $resfinal = mysqli_fetch_assoc($userres);
    //print_r($resfinal);die('ti');
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
    $req=isset($s)?mySelect('videos','titre','LIKE', $s):"SELECT * FROM videos";
    //die($req);
    $nbpages=mysqli_query($con,$req);
    return mysqli_num_rows($nbpages);
}

function mySelect($table,$field=null, $ope=null, $val=null, $orderby=null,$field2=null,$sens=null ){
    //$val=isset($val)?"'".$val."'":null;
    if(isset($val) && $ope=="LIKE"){
        //die($val);
        $val="'%".$val."%'";
    }

    return "SELECT * FROM $table WHERE $field $ope $val $orderby $field2 $sens";

}

function videos($nbpages,$start,$s){
    global $con;
    $start*=6;
    $req=isset($s)?mySelect('videos','titre','LIKE',$s,'ORDER BY','titre')." LIMIT $start,6":"SELECT * FROM videos ORDER BY date_ajout DESC LIMIT $start,6";
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
    //die($nbpages);
    for ($i = 0; $i < $nbpages; $i++) {
        $url="<a href='index.php?start=$i'>".$i.'</a>';
        echo '<li>'.$url.'</li>';
}}

/**
 * @param $id
 */
function getAuthor($id){
    global $con;

    $r=mysqli_fetch_assoc(mysqli_query($con, mySelect('users','user_id','=',$id)));

    return $r['nickname'];
}


function isAdmin($user){
    global $con;
    $r=mySelect('users','user_id','=',$user);
    $res=mysqli_fetch_assoc(mysqli_query($con,$r));
    if($res['is_admin']){return true;}
    return false;
}
