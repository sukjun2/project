<?php
include "../connect/connect.php";
include "../connect/session.php";
$searchKeyword = $_GET['searchKeyword'];
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>IT.D | 무료 이미지 다운로드 사이트</title>
        <!-- CSS 링크 -->
        <link rel="stylesheet" href="../assets/css/common.css">
        <link rel="stylesheet" href="../assets/css/reset.css">
        <link rel="stylesheet" href="../assets/css/search.css">
        <link rel="stylesheet" href="../assets/css/fonts.css">
    </head>
    <body>
        <?php include "../include/header.php" ?>
        <!-- header -->
        
        <section class="search_banner">
            <div class="banner_inner container">
                <p>Search</p>
                <div class="banner_udline"></div>
            </div>
        </section>

        <section class="search_wrap ">
            <div class="search_inner container">
                <div class="search_input">
                    <label for="search" class="ir"></label>
                    <img src="../../assets/image/search_Icon.svg" alt="검색">
                    <label for="search__inputResult" class="ir"></label>
                    <input onkeypress="show_name(event)" id="search__inputResult" name="search__inputResult" type="text" placeholder="검색어를 입력해주세요." value="<?=$searchKeyword?>" />
                    <button id="search__input__searchBtn">검색</button>
                </div>
            </div>
            <div class="search_sort container">
                <select name="image" id="image_sort">
                    <option value="Wallpaper">Wallpaper</option>
                    
                    <option value="Photo">Photo</option>
                    <option value="Picture">Picture</option>
                    <?php
                    
                    ?>
                </select>
                <select name="image" id="image_sort">
                    <option value="date">날짜별</option>
                    <option value="viewcount">조회수</option>
                    <option value="like">좋아요수</option>
                </select>
                <div class="num">Total Found:00</div>
            </div>
        </section>


        <main id="main">
            <div class="main_wrap">
                <div class="main_inner">
                    <section class="main_card container">
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="../../assets/image/main_image01.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="../../assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="../assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="../assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="../assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="../assets/image/main_image02.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="../assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="../assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image03.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image04.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image05.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image06.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image07.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image08.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                    </section>
                </div>
            </div>
        </main>
        <!-- main -->
        <?php include "../include/footer.php" ?>
        <!-- // footer -->
        <script>
            document.querySelector(".header__bottom").style.display = "none";        
        </script>
        <script>
            let keyword = '<?=$searchKeyword?>';
            keywords = keyword.split(' ')


            const searchInputBtn = document.querySelector('#search__input__searchBtn')
            searchInputBtn.addEventListener('click', () =>{
                let resultText = document.querySelector('#search__inputResult').value
                const regex = /#[^\s#]+/  
                console.log(resultText.split( /#[^\s#]+/g )
                // location.href=`search.php?searchKeyword=${resultText}`;
            })
            function show_name(e){
                let resultText = document.querySelector('#search__inputResult').value
                if(e.keyCode == 13){   
                    location.href=`search.php?searchKeyword=${resultText}`;
                }
            }
        </script>
    </body>
</html>
