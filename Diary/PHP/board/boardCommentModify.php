<?php
    include "../../connect/connect.php";
?>

<?php
    // 받아올 값(POST 방식)
    $commentPass = $_POST["pass"];
    $commentMsg = $_POST["msg"];
    $commentID = $_POST["commentID"];

    $sql = "SELECT commentID, commentPass, commentMsg FROM myBoardComment WHERE commentID = {$commentID}";
    $result = $connect -> query($sql);

    $Info = $result -> fetch_array(MYSQLI_ASSOC);

    if($Info['commentPass'] !== $commentPass){
        echo "비밀번호가 일치하지 않습니다";
    } else {

        $sql = "UPDATE myBoardComment SET commentMsg = '{$commentMsg}', commentPass = '{$commentPass}' WHERE myCommentID = {$commentID}";
    }

        // 데이터 가져옴
        $result = $connect -> query($sql);
    
        echo json_encode(array("info" => $commentID));
?>
