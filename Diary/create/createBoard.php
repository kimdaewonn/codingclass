<?php 
     include "../connect/connect.php";

    $sql = "CREATE TABLE myBoard(";
    $sql .= "myBoardID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "boardTitle varchar(50) NOT NULL,";
    $sql .= "boardSection enum('notion', 'event') DEFAULT NULL comment '공지사항 notion, 이벤트 event',";
    $sql .= "boardContents longtext NOT NULL,";
    $sql .= "boardImgFile varchar(100) DEFAULT NULL,";
    $sql .= "boardImgSize varchar(100) DEFAULT NULL,";
    $sql .= "boardView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myBoardID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);


 

?>