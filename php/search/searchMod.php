<?php 
$page = 1;
$viewNum = 8;
$viewLimit = ($viewNum * $page) - $viewNum;
if($searchSelect == 0){
    $boardSql = "SELECT b.categgoryBoardID, b.categgoryTitle, i.userPhoto, i.userNickName, b.categgoryPhoto, b.categgoryView 
    FROM categoryBoard as b 
    JOIN categoryTag as t ON b.categgoryBoardID = t.categgoryBoardID 
    JOIN userMember as i ON i.userMemberID = b.userMemberID 
    JOIN categoryLike as q ON q.categgoryBoardID = b.categgoryBoardID
    WHERE b.categgoryTitle LIKE '%{$searchKeyword}%'
    GROUP BY b.categgoryBoardID ORDER BY b.categgoryBoardID DESC LIMIT {$viewLimit}, {$viewNum}";
} else if ($searchSelect == 1) {
    $boardSql = "SELECT b.categgoryBoardID, b.categgoryTitle, i.userPhoto, i.userNickName, b.categgoryPhoto, b.categgoryView 
    FROM categoryBoard as b 
    JOIN categoryTag as t ON b.categgoryBoardID = t.categgoryBoardID 
    JOIN userMember as i ON i.userMemberID = b.userMemberID 
    JOIN categoryLike as q ON q.categgoryBoardID = b.categgoryBoardID
    WHERE b.categgoryTitle LIKE '%{$searchKeyword}%'
    GROUP BY b.categgoryBoardID ORDER BY b.categgoryView DESC LIMIT {$viewLimit}, {$viewNum}";
} else if ($searchSelect == 2) {
    $boardSql = "SELECT b.categgoryBoardID, b.categgoryTitle, i.userPhoto, i.userNickName, b.categgoryPhoto, b.categgoryView 
    FROM categoryBoard as b 
    JOIN categoryTag as t ON b.categgoryBoardID = t.categgoryBoardID 
    JOIN userMember as i ON i.userMemberID = b.userMemberID 
    JOIN categoryLike as q ON q.categgoryBoardID = b.categgoryBoardID
    WHERE b.categgoryTitle LIKE '%{$searchKeyword}%'
    GROUP BY b.categgoryBoardID ORDER BY b.categgoryView DESC LIMIT {$viewLimit}, {$viewNum}";
}
?>