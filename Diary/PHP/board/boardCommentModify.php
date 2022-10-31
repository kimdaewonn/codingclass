<?php
    include "../../connect/connect.php";

    // 받아올 값(POST 방식)
    $commentPass = $_POST["pass"];
    $commentMsg = $_POST["msg"];
    $commentID = $_POST["commentID"];

    $sql = "SELECT commentPass FROM myBoardComment WHERE myCommentID = {$commentID}";
    
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    // var_dump($info);
    
    if($info['commentPass'] === $commentPass){
        $sql = "UPDATE myBoardComment SET commentMsg = '{$commentMsg}', commentPass = '{$commentPass}' WHERE myCommentID = {$commentID}";
        $connect -> query($sql);
        echo json_encode(array("info" => $commentID));
    } else {
        echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한 번 확인해주세요.')</script>";
        echo "<script>history.back();</script>";
    }
?>
