<?php
require_once 'menu.php';
require_once 'functions.php';
$user_id=isset($_SESSION['user_id'])?$_SESSION['user_id']:'';


$mess=displayMess($_GET['mess']);


$url=isset($_GET['url'])?$_GET['url']:"";
$id=isset($_GET['id'])?$_GET['id']:"";
$titre=isset($_GET['titre'])?$_GET['titre']:"";

$video=existVideo($id);

historiser($id,$user_id);
?>

<div class="container">

    <div class="row">
        <div class="col-md-9">
            <?php displayVideo($video,$mess)?>
            <h3>Commentaires</h3>
            <?php
            echo addComment($user_id,$id);
            displayComments($user_id,$id) ?>
        </div>
    <?=asidevideos()?>
    </div>
</div>

<script>
    function tes(elem) {
        console.log(elem.id);
        //var v=$('.com:first').html();
        var v=elem.previousElementSibling.innerHTML;
        console.log(v);
       $('#texte').val(v);
        $("#texte").focus();
       $('#task').attr('value','up');
       $('#com_id').attr('value',elem.id);
            //document.querySelector('#task')setAttribute("value","del");
        console.log(v);

    }

</script>
