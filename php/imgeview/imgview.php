<?php
    include "../connect/session.php";
    include "../connect/connect.php";
    $categgoryBoardID = $_GET["categgoryBoardID"];
    $userMemberID = $_SESSION['userMemberID'];

    $plusSql = "UPDATE categoryBoard SET categgoryView = categgoryView + 1 WHERE categgoryBoardID = {$categgoryBoardID}";                    
    $plusResult = $connect->query($plusSql);


    $viewSql = "SELECT * FROM categoryBoard as b JOIN userMember as m ON b.userMemberID = m.userMemberID  WHERE categgoryBoardID = '$categgoryBoardID'";
    $viewResult = $connect->query($viewSql);

    $tagsSql = "SELECT * FROM categoryTag WHERE categgoryBoardID = '$categgoryBoardID'";
    $tagsResult = $connect->query($tagsSql);

    if ($viewResult) {
        $viewinfo = $viewResult->fetch_array(MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>이미지 뷰 페이지</title>

        <link rel="stylesheet" href="../../assets/css/reset.css" />
        <link rel="stylesheet" href="../../assets/css/common.css" />
        <link rel="stylesheet" href="../../assets/css/fonts.css" />
        <link rel="stylesheet" href="../../assets/css/imgview.css" />
    </head>
    <body>
        <?php include "../include/header.php" ?>
        <!-- main -->
        <main id="main">
			<section class="view__wrap container">
				<div class="view__inner">
					<div class="view__header">
						<h3 class="view__title"><?=$viewinfo['categgoryTitle']?></h3>
						<p class="view__info">
                            <?=$viewinfo['userNickName']?>
							<span> | </span>
							<span class="view__date"><?=date("Y-m-d", $viewinfo['regTime'])?></span>
							<span> | </span>
							<span class="view_count"><img src="../../assets/image/view_ico.svg" alt="조회수" /> <?=$viewinfo['categgoryView']?></span>
						</p>
                        <div class="view__btn">
							<button type="button" class="view_modify">수정</button>
							<button type="button" class="view_delete">삭제</button>
						</div>
					</div>
					<div class="view__contents">
						<div class="view__contetns__imgs">
							<img src="../assets/categoryimg/<?=$viewinfo['categgoryPhoto']?>" class="view__contents__img" alt="이미지1" />
							<a href="../assets/categoryimg/<?=$viewinfo['categgoryPhoto']?>" class="view__contents__download ir" download="">다운로드</a>
							<!-- <img src="../../assets/image/download_ico.svg" class="view__contents__download" alt="다운로드"> -->
						</div>
						<p class="view__contents__desc">이 사진은 그라데이션 물결을 표현한 사진입니다.</p>
					</div>
					<div class="view__tag">
						<span class="view__tag__list">
                        <?php 
                            foreach ($tagsResult as $tag) {
                        ?>
							<a href="#"><?=$tag['categgoryTag']?></a>
                        <?php 
                            }
                        ?>
						</span>
					</div>
				</div>

				<!-- comments -->
				<div class="board__comments">
					<h3>5 Comments</h3>
					<div class="comment">
						<div class="userComment__inner">
							<div class="userIcon">
								<img src="../../assets/img/usericon.svg" alt="프로필 사진" />
							</div>
							<div class="userComment">
								<label for="comment" class="blind">댓글을 쓸려면 로그인이 필요합니다.</label>
								<textarea name="comment" id="comment" rows="2" disabled="disabled"></textarea>
								<p>댓글을 쓰려면 <a href="loginpage">로그인</a>이 필요합니다.</p>
							</div>
						</div>
						<div class="commentBtn">
							<button type="button">쓰기</button>
						</div>
					</div>

					<div class="userComments">
						<ul>
							<li id="note-000001">
								<div class="userComments__item">
									<div class="userComments__title">
										<div class="userIcon">
											<img src="../../../assets/img/usericon.svg" alt="프로필 사진" />
										</div>
										<div class="userComments__name">
											<a href="">happy</a>
											<p>20분 전</p>
										</div>
										<div class="userComments__like unLike">
											<img src="../../../assets/img/unLikeIcon.svg" alt="" />
											<span>120</span>
										</div>
									</div>

									<div class="userComments__modify">
										<a href="">수정하기</a>
										<span>|</span>
										<a href="">삭제하기</a>
									</div>
								</div>

								<div class="userComments__desc">
									<p>고생 많으십니다. 감사합니다 ^^</p>
								</div>
								<div class="userComments__comment">
									<button class="write noview">댓글쓰기</button>
									<div class="leftLine"></div>
								</div>
							</li>

							<li id="note-000004">
								<div class="comment">
									<div class="userComment__inner">
										<div class="userIcon">
											<img src="../../../assets/img/usericon.svg" alt="프로필 사진" />
										</div>
										<div class="userComment login">
											<label for="comment" class="blind">댓글을 쓸려면 로그인이 필요합니다.</label>
											<textarea name="comment" id="comment" rows="2" placeholder="커뮤니티를 성장시키는 의견을 공유해주세요"></textarea>
										</div>
									</div>
									<div class="commentBtn">
										<button type="button">취소</button>
										<button type="button">쓰기</button>
									</div>
								</div>
							</li>
							<li id="note-000005">
								<div class="userComments__item">
									<div class="userComments__title">
										<div class="userIcon">
											<img src="../../../assets/img/usericon.svg" alt="프로필 사진" />
										</div>
										<div class="userComments__name">
											<a href="">happy</a>
											<p>20분 전</p>
										</div>
									</div>

									<!-- <div class="userComments__modify">
                                        <a href="">수정하기</a>
                                        <span>|</span>
                                        <a href="">삭제하기</a>
                                    </div> -->
								</div>

								<div class="userComments__desc">
									<p>
										여기는 글 보기 페이지이며 공지사항과 피드백 둘 다 동일하게 적용이 됩니다. 제목은 Bold체, 내용과 닉네임, 날짜는 미디움으로 설정하였습니다. 어쩔 티비 여기는 글 보기 페이지이며 공지사항과 피드백 둘 다 동일하게 적용이 됩니다. 제목은 Bold체, 내용과 닉네임, 날짜는
										미디움으로 설정하였습니다. 어쩔 티비
									</p>
								</div>
								<div class="userComments__comment">
									<button class="write noview">댓글쓰기</button>
									<div class="leftLine"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</main>
        <!-- //main -->
        <?php include "../include/footer.php" ?>
        <!-- // footer -->

        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- ham -->

    </body>
</html>
