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
    $vall='';
    $vall=isset($val)?"'".$val."'":null;
    if(isset($val) && $ope=="LIKE"){
        //die($val);
        $val="'%".$val."%'";
        $vall=$val;
    }

    return "SELECT * FROM $table WHERE $field $ope $vall $orderby $field2 $sens";

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

    $r=mysqli_fetch_assoc(execute(mySelect('users','user_id','=',$id)));
    //die($r);
    return $r['nickname'];
}

/**
 * @param $user
 * @return bool
 */
function isAdmin($user){
    global $con;
    $r=mySelect('users','user_id','=',$user);
    $res=mysqli_fetch_assoc(execute($r));
    if($res['is_admin']){return true;}
    return false;
}

/**
 * @param $user
 * @param $comm_id
 * @return bool
 */
function commentAuthor($user,$comm_id){
    global $con;
    $r="SELECT * FROM comments WHERE user_id='$user' AND comment_id='$comm_id'";
    //print_r($r);
    $res=execute($r);
    //print_r($res);
    if(mysqli_num_rows($res)==1){
        return true;}
    return false;
}

/**
 * @param $requete
 * @return bool|mysqli_result
 */
function execute($requete){
    //die($requete);
    global $con;
    return mysqli_query($con,$requete);

}

/**
 * @param $getMess
 * @return string|null
 */
function displayMess($m){
    $mess="";
    switch ($m){
        case 2:$mess="Only Admin Users may delete comments!";
            break;
        case 3:$mess="Only Admin Users or comments Authors may update comments!";
            break;
        default:
            $mess=null;
    }
    return $mess;
}

/**
 * @param $video_id
 * @param $user_id
 */
function historiser($video_id,$user_id)
{
    global $con;

    $histocheckres=execute("SELECT * FROM historique WHERE video_id='$video_id' AND user_id='$user_id'");


    if (mysqli_num_rows($histocheckres) < 1) {
        $historeq = "INSERT INTO historique(video_id,user_id,date_vision) VALUES ('$video_id','$user_id',NOW())";
//die($historeq);
        mysqli_query($con, $historeq);
    } else {
        //die('ok');
        mysqli_query($con, "UPDATE historique SET date_vision=NOW() WHERE video_id='$video_id' AND user_id='$user_id'");
    }
}

function displayVideo($res,$mess=null){
    //print_r($res);die('o');
    $url=            str_replace(['560','315'],['770','515'],$res['url']);
    $titre=$res['titre'];
    $date=$res['date_ajout'];
    $author=user_search($res['author']);
if($mess) {
    echo "    <div class='alert alert-danger'>" . $mess . "</div>";
}
    //die('la');

    //print_r(htmlspecialch$url));die('tt');

echo $url."<br>
            <h5>".$titre."</h5>
            <br>
            <p>vidéo ajoutée le ".$date."&nbsp;par <i>".$author."</i></p>
            <br>";
}


function addComment($sessionUser,$id){
    $user=user_search($sessionUser);
    if($sessionUser!=null){
        return "
                <h6><i>"
            .ucfirst($user).
            "&nbsp;</i>ajoute un commentaire</h6>
                <form action='comment.php' method='post' id='comment'>
                    <div class='form-group'>
                        <input class='form-control' name='comment' id='texte'>
                        <input type='hidden' name='video' value=".$id.">
                        <input type='hidden' name='com_id' value='' id='com_id'>
                        <input type='hidden' name='task' value='add' id='task'>
                    </div>
                    <button type='submit' class='btn btn-primary'>
                        envoyer
                    </button>
                </form>
                <br>";

    }

    return "
            <h6><a href='connexion.php?page=lecteur&id=$id'><i>connectez-vous pour ajouter un commentaire!</i></a></h6>";

}


function displayComments($user_id,$video_id)
{
   // die($video_id);
    $comres=execute(mySelect('comments','video_id','=',$video_id));


    while ($comm = mysqli_fetch_assoc($comres)) {
        $comid=$comm['comment_id'];
        echo "<b>" . ucfirst(user_search($comm['user_id'])) . "&nbsp;&nbsp;</b><i class='com'>" . ucfirst($comm['comment']) . "</i>";
        if (commentAuthor($user_id, $comm['comment_id']) || isAdmin($user_id)) {
            echo "<s style='cursor:pointer' onclick='tes(this)' id=" . $comm['comment_id'] . ">modifier</s>";
        }
        echo "<a style='display:inline-block' 
href='comment.php?task=delete&comm_id=$comid&video_id=$video_id'>
                        <img src=\"criss-cross.png\" width=\"28\" height=\"29\" alt=\"DEL\" ><br>

</a><br>";
    }

}

function asidevideos(){

                $res=execute("SELECT * FROM videos ORDER BY date_ajout DESC LIMIT 0,6");
            $div="<div class='col-md-3'>
            <ul>";


                while($val=mysqli_fetch_assoc($res)){
                    $video_id=$val['video_id'];
                    $titre=substr($val['titre'], 0, 25) . '...';

                $div.="<li>". str_replace(['560', '315'], ['290', '145'], $val['url'])."
                    <div>
                        <span>
                            <a href='lecteur.php?id=$video_id'>".$titre."</a>
                        </span>
                    </div>
                </li>";
                }
           $div.=" </ul>        </div>";

                return $div;

}

function existVideo($id){

    $res2 = mysqli_fetch_assoc(execute(mySelect('videos', 'video_id', '=', $id)));
    if (!$res2) {
        header('Location:index.php');exit();
    }
    return $res2;
}

function existmail($mail){
   // die($mail);
    $res = execute(mySelect('users', 'email', '=', $mail));
    //print_r($res);die('oo');
    //if($res){header('Location:register.php');exit();}
    die('ti');

}
