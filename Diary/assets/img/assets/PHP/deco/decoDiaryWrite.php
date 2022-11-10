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
    <title>다이어리 꾸미기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="deco__Diary">
            <div class="diary__inner__black">
                
                <div class="edit_function" alt="편집기능 이미지" style="left: 50%; top: 20px;;">
                    <div>:::</div>
                    <button id="btn-bold">
                        <b>가</b>
                    </button>
                    <button id="btn-italic">
                        <i>가</i>
                    </button>
                    <button id="btn-underline">
                        <u>가</u>
                    </button>
                    <button id="btn-strike">
                        <s>가</s>
                    </button>
                    <button id="btn-ordered-list">
                        1.
                    </button>
                    <button id="btn-unordered-list">
                        •.
                    </button>
                    <button id="btn-image">
                        이미지
                    </button>
                    <input type="file" name="uploadfile" id="img-selector" accept="image/*" style="display:none;"/>
                </div>
                <div class="text_cont">
                    <div style="font-size:10px; color:rgba(0, 0, 0, 0.175)">텍스트박스</div>
                    <textarea name="text" id="text" cols="30" rows="10" placeholder="여기에 텍스트를 입력하세요">ㅇㅇ</textarea>
                </div>
                <!-- 스티커 보관함 -->
                <div class="shading">
                    <div class="edit_sticker">
                        <!-- <p>원하는 스티커를 본문에 드래그 해보세요!</p> -->
                        <img class="sticker" src="../../assets/img/sticker_cont_1/1.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/2.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/3.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/4.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/5.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/6.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/7.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/8.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/9.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/10.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/11.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_1/12.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/1.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/2.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/3.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/4.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/5.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/6.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/7.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/8.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/9.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/10.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/11.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_2/12.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/1.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/2.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/3.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/4.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/5.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/6.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/7.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/8.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/9.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/10.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/11.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/12.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/13.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/14.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/15.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/16.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/17.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/18.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/19.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_3/20.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/1.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/2.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/3.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/4.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/5.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/6.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/7.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/8.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/9.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/10.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/11.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/12.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/13.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/14.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/15.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/16.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/17.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/18.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/19.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/20.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/21.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_4/22.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/1.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/2.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/3.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/4.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/5.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/6.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/7.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/8.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/9.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/10.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/11.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/12.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/13.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/14.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/15.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/16.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/17.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/18.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/19.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/20.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/21.png" alt="얉게">
                        <img class="sticker" src="../../assets/img/sticker_cont_5/22.png" alt="얉게">
                        
                    </div>
                </div>
<style>
body{
    background-image: none !important;
    background: #f8fafc !important;
    height: 100vh;
    position: relative;
    overflow: hidden;
}
.edit_function{
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 451px;
    z-index: 100;
    position: absolute;
    background: #ffffff8f;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}
.edit_function button.active{
    background-color: #721aff;
}
.diary_canvas{
    background: #fff;
    background-image: url(/assets/img/grid_box.png);
    font-family: 'IMHyemin';
    text-align: center;
    width: 100vw;
    height: 100vh;
    font-size: 20px;
    line-height: 1.4;
    backdrop-filter: saturate(180%) blur(20px);
    /* resize: none; */
    /* margin-bottom: 40px; */
    /* position: absolute;
    top: 0;
    left: 0; */
    padding: 20px;
    box-sizing: border-box;
}
.diary_canvas img{
    max-width: 40vw;
    border-radius: 25px;
}
.diary_canvas li{
    /* margin-left: 131px; */
    list-style: korean-hangul-formal;
    margin-left: 20px;
}
.diary_canvas:focus{
    outline: 1px solid #721aff;
}
.screenshot_cont{
    position: fixed;
    bottom: 30px;
    left: 50%;
    transform: translate(-50%,0);
}
.screenshot_cont button{
    padding: 15px;
    font-size: 16px;
    border-radius: 100px;
    border: 1px solid rgb(225, 224, 224);
    background: #fff;
    box-shadow: 0px 10px 10px -10px #25085485;
    cursor: pointer;
    
}
.screenshot_cont button:nth-child(1){
    background: #733cff;
    color: #fff;
}
.screenshot_cont button:nth-child(1):hover,
.screenshot_cont button:nth-child(2):hover{
    transform: translatey(-10px);
    transition: 0.25s;
}
.screenshot_cont button:nth-child(1):not(:hover),
.screenshot_cont button:nth-child(2):not(:hover){
    transition: 0.25s;
}
#text{
    background: rgba(255, 255, 255, 0.639);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    padding: 10px;
    text-align: center;
    /* resize: none; */
    width: 40px;
    height: 70px;
    border-radius: 15px;
    border: none;
    font-family: 'IMHyemin';
    z-index: 1;
}
.text_cont{
    z-index: 1;
    position: absolute;
    right: 100px;
    bottom: 100px;
    cursor: pointer;
}
.shading{
    z-index: 1;
    height: 600px;
    overflow-x: scroll;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translate(0, -50%);
    display: flex;
    flex-direction: column;
    width: 70px;
}
.edit_sticker{
    z-index: 1;
    height: 600px;
    overflow-x: scroll;
    /* position: absolute; */
    /* right: 0; */
    /* top: 50%; */
    /* transform: translate(0, -50%); */
    /* display: flex; */
    /* flex-direction: column; */
    /* width: 70px; */
}
.shading::after,
.shading::before{
    content: '';
}
.shading::before{
    content: '';
    width: 100%;
    z-index: 5;
    background: linear-gradient(180deg, white, transparent);
    /* width: 100px; */
    position: fixed;
    left: 0;
    top: 0;
    height: 30px;
}
.shading::after{
    content: '';
    width: 100%;
    z-index: 5;
    background: linear-gradient(0deg, white, transparent);
    /* width: 100px; */
    position: fixed;
    left: 0;
    bottom: 0;
    height: 30px;
}

img.sticker{
    width: 50px;
}
</style>
                
                <div class="diaryDesc">
                    <label for="diaryContents" class="ir">내용</label>
                    <div class="diary_canvas" id="editor" contenteditable="true" placeholder="여기에 입력해주세요" ></div>

                    <!-- <textarea name="diaryBox" id="diaryBox" placeholder="일기를 써주세요 :3" cols="20" rows="3" class="diaryBox" required></textarea> -->
                </div>
                
                <button type="submit" class="diary__btn">완료</button>
                <div class="screenshot_cont">
                    <!-- 전체 부분-->
                    <button onclick=bodyShot()>저장하기</button>
                    <!-- 일부분 부분-->
                    <button onclick="">갤러리</button>
                    <!-- <button onclick=partShot()>partShot</button> -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
$( function() {
// $( ".edit_sticker" ).draggable();
$( ".edit_function" ).draggable();
$( ".text_cont" ).draggable();
} );
</script>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
<script src="../../assets/javascript/html2canvas.js"></script>
<!-- <script>
    
</script> -->
<script>

    function bodyShot() {
    //전체 스크린 샷하기
        html2canvas(document.body)
        //document에서 body 부분을 스크린샷을 함.
        .then(
            function (canvas) {
            //canvas 결과값을 drawImg 함수를 통해서
            //결과를 canvas 넘어줌.
            //png의 결과 값
            drawImg(canvas.toDataURL('image/png'));

            //appendchild 부분을 주석을 풀게 되면 body
            //document.body.appendChild(canvas);

            //특별부록 파일 저장하기 위한 부분.
            saveAs(canvas.toDataURL(), 'file-name.png');
            }).catch(function (err) {
            console.log(err);
            });
            }

            function partShot() {
            //특정부분 스크린샷
            html2canvas(document.getElementById("container"))
            //id container 부분만 스크린샷
            .then(function (canvas) {
            //jpg 결과값
            drawImg(canvas.toDataURL('image/jpeg'));
            //이미지 저장
            saveAs(canvas.toDataURL(), 'file-name.jpg');
            }).catch(function (err) {
            console.log(err);
        });
    }

    function drawImg(imgData) {
    console.log(imgData);
    //imgData의 결과값을 console 로그롤 보실 수 있습니다.
    return new Promise(function reslove() {
    //내가 결과 값을 그릴 canvas 부분 설정
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    //canvas의 뿌려진 부분 초기화
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    var imageObj = new Image();
    imageObj.onload = function () {
    ctx.drawImage(imageObj, 10, 10);
    //canvas img를 그리겠다.
    };
    imageObj.src = imgData;
    //그릴 image데이터를 넣어준다.

    }, function reject() { });

    }
    function saveAs(uri, filename) {
        var link = document.createElement('a');
        if (typeof link.download === 'string') {
            link.href = uri;
            link.download = filename;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            } else {
            window.open(uri);
        }
    }
</script>

<script>
    // 스티커 선택
    const stickerAll = document.querySelectorAll(".sticker")
    const size = document.querySelectorAll(".size")

    
    
    stickerAll.forEach((item,where)=>{
        item.onmousedown = function (event) {
            // size.forEach((e,i)=>{
            //     e.addEventListener("click", ()=>{
            //         let sizeInfo = i+1;
            //         console.log(sizeInfo)
            //     })
            // })
            let shiftX = event.clientX - item.getBoundingClientRect().left;
            let shiftY = event.clientY - item.getBoundingClientRect().top;
    
            item.style.position = 'absolute';
            item.style.border = '1px dashed #721aff';
            item.style.borderRadius = '15px';
            item.style.zIndex = 100;
            document.body.append(item);
    
            moveAt(event.pageX, event.pageY);
    
            // 초기 이동을 고려한 좌표 (pageX, pageY)에서
            // 공을 이동합니다.
            function moveAt(pageX, pageY) {
                item.style.left = pageX - shiftX + 'px';
                item.style.top = pageY - shiftY + 'px';
            }
    
            function onMouseMove(event) {
                moveAt(event.pageX, event.pageY);
            }
    
            // mousemove로 공을 움직입니다.
            document.addEventListener('mousemove', onMouseMove);
    
            // 공을 드롭하고, 불필요한 핸들러를 제거합니다.
            item.onmouseup = function () {
                document.removeEventListener('mousemove', onMouseMove);
                item.style.border = '1px solid rgba(255, 255, 255, 0)';
                item.onmouseup = null;
            };
    
        };
    
        item.ondragstart = function () {
            return false;
        };
    })




    //텍스트 에디터
    const editor = document.getElementById('editor');
    const btnBold = document.getElementById('btn-bold');
    const btnItalic = document.getElementById('btn-italic');
    const btnUnderline = document.getElementById('btn-underline');
    const btnStrike = document.getElementById('btn-strike');
    const btnOrderedList = document.getElementById('btn-ordered-list');
    const btnUnorderedList = document.getElementById('btn-unordered-list');

    const btnImage = document.getElementById('btn-image');
    const imageSelector = document.getElementById('img-selector');

    btnBold.addEventListener('click', function () {
        setStyle('bold');
    });

    btnItalic.addEventListener('click', function () {
        setStyle('italic');
    });

    btnUnderline.addEventListener('click', function () {
        setStyle('underline');
    });

    btnStrike.addEventListener('click', function () {
        setStyle('strikeThrough')
    });

    btnOrderedList.addEventListener('click', function () {
        setStyle('insertOrderedList');
    });

    btnUnorderedList.addEventListener('click', function () {
        setStyle('insertUnorderedList');
    });

    btnImage.addEventListener('click', function () {
        imageSelector.click();
    });

    imageSelector.addEventListener('change', function (e) {
        const files = e.target.files;
        if (!!files) {
            insertImageDate(files[0]);
        }
    });

    editor.addEventListener('keydown', function () {
        checkStyle();
    });

    editor.addEventListener('mousedown', function () {
        checkStyle();
    });
    
    
    function setStyle(style) {
        document.execCommand(style);
        focusEditor();
        checkStyle();
    }
    
    function insertImageDate(file) {
        const reader = new FileReader();
        reader.addEventListener('load', function (e) {
            focusEditor();
            document.execCommand('insertImage', false, `${reader.result}`);
        });
        reader.readAsDataURL(file);
    }

    function checkStyle() {
        if (isStyle('bold')) {
            btnBold.classList.add('active');
        } else {
            btnBold.classList.remove('active');
        }
        if (isStyle('italic')) {
            btnItalic.classList.add('active');
        } else {
            btnItalic.classList.remove('active');
        }
        if (isStyle('underline')) {
            btnUnderline.classList.add('active');
        } else {
            btnUnderline.classList.remove('active');
        }
        if (isStyle('strikeThrough')) {
            btnStrike.classList.add('active');
        } else {
            btnStrike.classList.remove('active');
        }
        if (isStyle('insertOrderedList')) {
            btnOrderedList.classList.add('active');
        } else {
            btnOrderedList.classList.remove('active');
        }
        if (isStyle('insertUnorderedList')) {
            btnUnorderedList.classList.add('active');
        } else {
            btnUnorderedList.classList.remove('active');
        }
    }

    function isStyle(style) {
        return document.queryCommandState(style);
    }

    function setStyle(style) {
        document.execCommand(style);
        focusEditor();
    }

    // 버튼 클릭 시 에디터가 포커스를 잃기 때문에 다시 에디터에 포커스를 해줌
    function focusEditor() {
        editor.focus({preventScroll: true});
    }

    // 마우스를 트래킹하는 파티클
    // document.querySelector(".wrap").addEventListener("mousemove", (e) => {
    //         //마우스 좌표 값
    //         let mousePageX = e.pageX;
    //         let mousePageY = e.pageY;

    //         // 전체 가로
    //         let centerPageX = window.innerWidth/2 - mousePageX;
    //         let centerPageY = window.innerHeight/2 - mousePageY;


    //         //포스트 커버 썸내일 움직이기
    //         for(let q=1; q<=4; q++){
    //             document.querySelectorAll(".particle").forEach((e,i)=>{
    //                 e.style.transform = "translate("+ -centerPageX/(q*4)+"px, "+ -centerPageY/(q*4)+"px)";
    //             })
    //         }
    //     }) 
</script>
</script>
</html>