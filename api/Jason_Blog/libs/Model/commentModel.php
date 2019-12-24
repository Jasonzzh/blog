<?php
class commentModel {

    function findArticleComments($id, $pageNo, $pageSize) {
        $sql = 'select comment.*, user.name, user.id, user.iphone, user.userPic, user.autograph from comment, user where comment.userId = user.id and comment.articleId = '.$id.' Limit '.$pageSize*$pageNo.','.$pageSize;
        return $sql;
    }

    function insertComments($userId, $content, $articleId) {
        $sql = "insert into comment(userId, content, articleId) values($userId, $content, $articleId)";
        return $sql
    }
}