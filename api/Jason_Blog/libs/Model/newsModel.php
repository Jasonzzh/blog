<?php
class newsModel {

    function findAll($dataTable) {
        $sql = "select * from $dataTable";
        return $sql;
    }

    function findAll_OrderBy($dataTable, $orderParams, $sort) {
        if($sort) {
            $sql = "select * from $dataTable order by $orderParams desc";
        } else {
            $sql = "select * from $dataTable order by $orderParams asc";
        }
        return $sql;
    }

    function findSome($dataTable, $column_name, $value) {
        $sql = "select * from $dataTable where $column_name = $value";
        return $sql;
    }

    function findData_ByPage($dataTable, $page, $nums) {
        $sql = 'select * from '.$dataTable.' order by releaseDate desc limit '.$page*$nums.','.$nums;
        return $sql;
    }

    function findData_Category_ByPage($dataTable, $page, $nums, $category_id) {
        $sql = 'select * from '.$dataTable.' where category_id = '.$category_id.' order by releaseDate desc limit '.$page*$nums.','.$nums;
        return $sql;
    }

    function find_like($dataTable, $page, $nums, $keywords) {
        $sql = "select * from $dataTable where title like '%$keywords%'";
        return $sql;
    }

    function update_user($dataTable, $name, $autograph, $id) {
        $sql = "update $dataTable set name = '$name', autograph = '$autograph' where id = $id";
        return $sql;
    }
}