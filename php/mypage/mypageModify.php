<?php

include "../connect/connect.php";
include "../connect/session.php";
    
    $type = $_POST['type'];
    $userMemberID = $_SESSION['userMemberID'];

    
    if($type == "nicknameChange"){
        $nickname = $_POST['nickname'];
        $sql = "UPDATE userMember SET userNickName = '$nickname' WHERE userMemberID = '$userMemberID'";
        $result = $connect -> query($sql);

        echo json_encode(array("nickname" => $nickname));
    }

    if($type == "gender"){
        $gender = $_POST['gender'];
        $sql = "UPDATE userMember SET userGender = '$gender' WHERE userMemberID = '$userMemberID'";
        $result = $connect -> query($sql);

        echo json_encode(array("gender" => $gender));
    }

    if($type == "phonenumber"){
        $phonenumber = $_POST['phonenumber'];
        $sql = "UPDATE userMember SET userPhone = '$phonenumber' WHERE userMemberID = '$userMemberID'";
        $result = $connect -> query($sql);

        echo json_encode(array("phonenumber" => $phonenumber));
    }

    if($type == "userShortInfo"){
        $userShortInfo = $_POST['userShortInfo'];
        $sql = "UPDATE userMember SET userShortInfo = '$userShortInfo' WHERE userMemberID = '$userMemberID'";
        $result = $connect -> query($sql);

        echo json_encode(array("userShortInfo" => $userShortInfo));
    }

    if($type == "userLongInfo"){
        $userLongInfo = $_POST['userLongInfo'];
        $sql = "UPDATE userMember SET userLongInfo = '$userLongInfo' WHERE userMemberID = '$userMemberID'";
        $result = $connect -> query($sql);

        echo json_encode(array("userLongInfo" => $sql));
    }

    if($type == "userOneInfo"){
        $userOneInfo = $_POST['userOneInfo'];
        $sql = "UPDATE userMember SET userOneInfo = '$userOneInfo' WHERE userMemberID = '$userMemberID'";
        $result = $connect -> query($sql);

        echo json_encode(array("userOneInfo" => $sql));
    }

    if($type == "joinLeave"){
        $youPass = $_POST['youPass'];
        $youPass = sha1("web".$youPass);
        $sql2 = "SELECT * FROM userMember WHERE userMemberID = $userMemberID AND userPass = '$youPass'";
        $result2 = $connect -> query($sql2);

        if($result2 -> num_rows == 1){
            $sql = "DELETE FROM userMember WHERE userMemberID = $userMemberID AND userPass = '$youPass'";
            $result = $connect -> query($sql);
            unset($_SESSION['userMemberID']);
            unset($_SESSION['userId']);
            unset($_SESSION['userName']);
            $jsonResult = "good";
        } else {
            $jsonResult = "bad";
        }
        echo json_encode(array("result" => $jsonResult));
    }

    if($type == "categoryscroll"){
        $page = $_POST['page'];
        $viewNum = 8;
        $viewLimit = ($viewNum * $page) - $viewNum;
        $tagfile = '';
        $categoryCountSql = "SELECT count(categgoryBoardID) as cate FROM categoryBoard as b JOIN userMember as m ON b.userMemberID = m.userMemberID  WHERE m.userMemberID = '{$userMemberID}' ";
        $categoryCountResult = $connect -> query($categoryCountSql);

        $categoryCount = $categoryCountResult -> fetch_array(MYSQLI_ASSOC);
        $categoryCount = $categoryCount['cate'];
        $categoryCount = ceil($categoryCount/$viewNum);

        if($page <= $categoryCount){
            $boardSql = "SELECT * FROM categoryBoard as b JOIN userMember as m ON b.userMemberID = m.userMemberID  WHERE m.userMemberID = '{$userMemberID}' ORDER BY b.categgoryBoardID DESC LIMIT {$viewLimit}, {$viewNum} ";
            $boardResult = $connect -> query($boardSql);
            foreach($boardResult as $board) {    
                $tagfile .= "<article class='mypage__cardBox'>
                        <div class='cardBox__image'>
                            <figure>
                                <a href='../imgeview/imgview.php?categgoryBoardID=".$board['categgoryBoardID']."'><img src='../assets/categoryimg/".$board['categgoryPhoto']."' alt='이미지' /></a>
                            </figure>
                        </div>
                    </article>";
                } 
                echo json_encode(array("result" => 'good', "page" => $tagfile));
        } else echo json_encode(array("result" => 'bad'));

    }

?>

