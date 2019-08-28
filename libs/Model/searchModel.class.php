<?php
    class searchModel{
        public function sh($dataTable,$keyWords){
            $sql = "SELECT * FROM $dataTable WHERE Title LIKE '%$keyWords%'";
            return $sql;
        }
    }
?>