<?php
    class fyPageModel{
        /*-------分页方法实现------*/
        // $Spage单页个数
        // $pageNumber当前页码
        // $numbers总个数
        function paging($Spage,$pageNumber,$numbers){
            if($numbers%$Spage == 0){
                $pages = ($numbers/$Spage);
            }
            else{
                $pages = (($numbers-($numbers%$Spage))/$Spage)+1;
            }
            // 计算得出总页数pages
            if($pageNumber<=$pages&&$pageNumber>0){
                $startSearch = ($pageNumber-1)*$Spage;
            }
            else if($pageNumber<=0){
                $startSearch = 0;
            }
            else{
                $startSearch = ($pages-1)*$Spage;
            }
            // 查询起点
            return array($pages,$startSearch);
        }
    }
?>