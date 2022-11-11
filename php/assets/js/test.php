//처음 페이지 초기화


    if($startPage < 1) $startPage = 1;
    //마지막 페이지 초기화
    if($endPage >= $boardCount) $endPage = $boardCount;
    //이전 페이지, 처음 페이지
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='boardSearch.php?page=1&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>&lt;&lt;</a></li>";
        echo "<li><a href='boardSearch.php?page={$prevPage}'>&lt;</a></li>";
    }
    //페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        echo "<li class='{$active}'><a href='boardSearch.php?page={$i}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>{$i}</a></li>";
    }
    //다음 페이지, 마지막 페이지
    if ($page == 1){
    } else if($page != $endPage) {
        $nextPage = $page + 1;
        echo "<li><a href='boardSearch.php?page={$nextPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>&gt;</a></li>";
        echo "<li><a href='boardSearch.php?page={$boardCount}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>&gt;&gt;</a></li>";
    }









