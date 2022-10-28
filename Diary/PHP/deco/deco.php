<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    // include "../../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/faq.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="site">
            <div class="test">
                <div class="hamburger_menu">
                    <img class="header_menu_close" src="../../assets/img/login_cross.png" alt="">
                    <a href="../board/board.php">공지사항</a>
                    <a href="../event/event.php">이벤트</a>
                    <a href="../rank/rank.php">이달의 순위</a>
                    <a href="../deco/decoDiary.php">다꾸하기</a>
                    <a href="../info/info.php">정보</a>
                    <a href="../faq/faq.php">FAQ</a>
                </div>
                <div class="header">
                    <div class="header_inner">
                        <a href="../main/main.php"><img src="../../assets/img/site_header_logo.png" alt="logo"></a>
                        <img class="hamburger_menu_open" src="../../assets/img/hamburger_btn.png" alt="">
                        <a href="../board/board.php">공지사항</a>
                        <a href="../event/event.php">이벤트</a>
                        <a href="../rank/rank.php">이달의 순위</a>
                        <a href="../deco/decoDiary.php">다꾸하기</a>
                        <a href="../info/info.php">정보</a>
                        <a href="../faq/faq.php">FAQ</a>
                    </div>
                </div>
                <div class="profile_cont" alt="로그인한 프로파일 이미지">
                    <?php if( isset($_SESSION['myMemberID'])){ ?>
                        <span><a href="../login/logout.php" class="profile_cont_close"><img src="../../assets/img/login_cross.png" alt="로그아웃"></a></span>
                        <!-- <img src="../../assets/img/site_header_profile.png" alt="logo"> -->
                        <?php echo "<img src='../../assets/img/blog/".$_SESSION['youImageFile']."' alt='프로필 이미지' class='profile_image'>"; ?>
                        <?php
                            echo "<p>";
                            echo "<a href='../mypage/myPage.php' class='mypage__btn'></a>안녕하세요 <em>".$_SESSION['youName']."님!</em>";
                            echo "</p>";
                            ?>
                            <span class="btn_scroll_top">
                                <a href="#">^</a>
                            </span>
                    <?php } else { ?>
                        <a style="display:none" href="../login/logout.php" class="profile_cont_close"><img src="../../assets/img/login_cross.png" alt="로그아웃"></a>
                        <img src="../../assets/img/site_header_profile_no.png" class="loginplz" alt="logo">
                        <p style="margin-left:0">여기를 눌러 로그인!</p>
                        <span class="btn_scroll_top">
                            <a href="#">^</a>
                        </span>
                        <script>
                            document.querySelector(".btn-close").addEventListener("click", ()=>{
                                document.querySelector(".login__popup").classList.remove("show");
                            })
                
                            document.querySelector(".loginplz").addEventListener("click", ()=>{
                                document.querySelector(".login__popup").classList.add("show");
                            })
                        </script>
                    <?php } ?> 
                </div>
                <script>
                    //모바일시 햄버거 메뉴 구현
                    const menuOpen = document.querySelector(".hamburger_menu_open");
                    menuOpen.addEventListener("click", ()=>{
                        document.querySelector(".hamburger_menu").style.display="flex"
                        document.querySelector("body").style.overflow="hidden"
                    })
                    const menuClose = document.querySelector(".header_menu_close");
                    menuClose.addEventListener("click", ()=>{
                        document.querySelector(".hamburger_menu").style.display="none"
                        document.querySelector("body").style.overflow="auto"
                    })
                </script>
            </div>
            <!-- 헤더 -->


            <div class="board">
                <div class="board_info">
                <img src="../../assets/img/site_main_faq.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_05" alt="">
                    <h2>다이어리 꾸미기</h2>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <p>궁금하신 부분들에 대해 정리해봤어요!</p>
                </div>
                <style>
.deco_list{
    width: 100%;
}
.deco_list_inner{
    max-width: 1160px;
    margin: 0 auto;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 500px;
    margin-bottom: 30px;
}
.deco_list_inner a{
    background: #ffffff36;
    width: 32%;
    height: 100%;
    border-radius: 25px;
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border: 1px solid #e9ebed;
    transition: transform 0.25s, box-shadow 0.25s, background 0.25s;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.deco_list_inner a:hover{
    transform: translateY(-33px);
    box-shadow: 0px 50px 50px -30px #783d2a52;
    background: linear-gradient(0deg, #ff987e45 0%, transparent 5%);
}
.deco_list_inner a:not(:hover){
    transition: transform 0.25s, box-shadow 0.25s, background 0.25s;
}
.deco_list_inner a img{
    width: 160px;
    margin-bottom: 20px;
}
.deco_list_inner a p{
    font-size: 30px;
    font-weight: bold;
    font-family: 'EliceDigitalBaeum';
    margin-bottom: 10px;
}
.deco_list_inner a span{
    font-size: 22px;
    color: rgba(0, 0, 0, 0.446);
}
                </style>
                <div class="deco_list">
                    <div class="deco_list_inner">
                        
                        <a href="decoDiary.php" class="decoDiary">
                            <img src="../../assets/img/site_main_deco_btn1.png" alt="">
                            <p>다이어리 만들기</p>
                            <span>내 다이어리를 만들어봐요!</span>
                        </a>
                        <a href="decoSticker.php" class="decoSticker">
                            <img src="../../assets/img/site_main_deco_btn2.png" alt="">
                            <p>스티커 꾸미기</p>
                            <span>나만의 스티커 꾸미기~</span>
                        </a>
                        <a href="viewSticker.php" class="viewSticker">
                            <img src="../../assets/img/site_main_deco_btn3.png" alt="">
                            <p>다른 작품 보러가기</p>
                            <span>다른 사람들은 무엇을 만들었을까요?</span>
                        </a>
                    </div>
                </div>
                    <!-- test -->
            </div>
        </div>
        


        <!-- 푸터 -->
        <div class="test">
            <footer class="footer">
                <div class="footer_inner">
                    <div>
                        <img src="../../assets/img/footer__logo.png" alt="푸터 로고">
                        <p>CODING CODI ALL Rrights Reserved</p>
                        <p>Contact : to_before@naver.com</p>
                    </div>
                    <!-- <button>사이트맵</button> -->
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>