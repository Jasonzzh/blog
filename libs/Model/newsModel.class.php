<?php
    class newsModel{

        function findAll($dataTable){
            $sql = "select * from $dataTable";
        }

        function findAll_orderby_date($dataTable,$sortParameters){
            $sql = "select * from $dataTable order by $sortParameters desc";
            return $sql;
        }

        function findAll_orderby_page($dataTable,$sortParameters,$start,$length){
            $sql = 'select * from '.$dataTable.' order by '.$sortParameters.' desc limit '.$start.','.$length;
            return $sql;
        }

        function findAll_orderby_pageShow($dataTable,$sortParameters,$start,$length,$keywords,$value){
            $sql = 'select * from '.$dataTable.' where '.$keywords.' = '.$value.' order by '.$sortParameters.' desc limit '.$start.','.$length;
            return $sql;
        }

        function findOne($dataTable,$id){
            $sql = "select * from $dataTable where id = '$id'";
            return $sql;
        }

        function findSome($dataTable,$keywords,$id,$sortParameters){
            $sql = "select * from $dataTable where $keywords = $id order by $sortParameters desc";
            return $sql;
        }

        function Insert($blog_name,$blog_url,$blog_email){
            $sql = "INSERT INTO excellent_blogs(Title,SiteUrl,SiteEmail) VALUES('$blog_name','$blog_url','$blog_email')";
            return $sql;
        }

        function Delete($dataTable,$keywords,$id){
            $sql = "DELETE FROM $dataTable WHERE $keywords = '$id'";
            return $sql;
        }

        public function InsertNews($dataTable,$Title,$SmallTitle,$datatime,$Author,$Content){
            $sql = "INSERT INTO $dataTable(Title,SmallTitle,Time,Author,Content) VALUES('$Title','$SmallTitle','$datatime','$Author','$Content')";
            return $sql;
        }

        public function changeData($dataTable,$keyWord,$field_data,$id){
            $sql = "UPDATE $dataTable SET $keyWord = '$field_data' WHERE id = '$id'";
            return $sql;
        }

        public function updata($dataTable,$id,$Title,$SmallTitle,$datatime,$Author,$Content){
            $sql = "UPDATE $dataTable SET Title = '$Title',SmallTitle = '$SmallTitle',Time = '$datatime',Author = '$Author',Content = '$Content' WHERE id = '$id'";
            return $sql;
        }

        public function blogs_edit($id,$Title,$SiteUrl,$SiteEmail){
            $sql = "UPDATE excellent_blogs SET Title = '$Title',SiteUrl = '$SiteUrl',SiteEmail = '$SiteEmail' WHERE id = '$id'";
            return $sql;
        }

        public function InsertBlogSite($Title,$SiteUrl,$SiteEmail){
            $sql = "INSERT INTO excellent_blogs(Title,SiteUrl,SiteEmail) VALUES('$Title','$SiteUrl','$SiteEmail')";
            return $sql;
        }

        public function updataAll($dataTable,$keyword,$keyvalue){
            $sql = "UPDATE $dataTable SET $keyword = $keyvalue";
            return $sql;
        }

        public function updataOne($dataTable,$keyWord,$field_data,$id,$value){
            $sql = "UPDATE $dataTable SET $keyWord = '$field_data' WHERE $id = '$value'";
            return $sql;
        }
    }
?>