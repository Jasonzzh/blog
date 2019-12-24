<?php
class commentController {

    private $conn,$postParams;

    public function connect() {
        require_once('./config/config.php');
        $this->conn = M('mysql')->connect($config);
        $this->postParams = isset($GLOBALS['HTTP_RAW_POST_DATA'])?$GLOBALS['HTTP_RAW_POST_DATA']:file_get_contents("php://input");
    }

    /**
     * 获取评论
     */
    public function getComments() {
        $this->connect();
        $postParams = json_decode($this->postParams);
        if(!isset($postParams->id) || !isset($postParams->pageNo) || !isset($postParams->pageSize)) {
            $response = array('code' => 400,'msg' => '参数错误!');
            print json_encode($response);
        } else {
            $id = $postParams->id;
            $pageNo = $postParams->pageNo;
            $pageSize = $postParams->pageSize;
            $sql = M('comment')->findArticleComments($id, $pageNo, $pageSize);
            $result = M('mysql')->query($this->conn, $sql);
            $response = array('code' => 200,'msg' => '请求成功!','data' => $result);
            print json_encode($response);
        }
    }

    /**
     * 发布评论
     */
    releaseComments() {
        $this->connect();
        $postParams = json_decode($this->postParams);
        if(!isset($postParams->userId) || !isset($postParams->content) || !isset($postParams->articleId)) {
            $response = array('code' => 400,'msg' => '参数错误!');
            print json_encode($response);
        } else {
            $userId = $postParams->userId;
            $content = $postParams->content;
            $articleId = $postParams->articleId;
            $sql = M('comment')->insertComments($userId, $content, $articleId);
            $result = M('mysql')->query($this->conn, $sql);
            $response = array('code' => 200,'msg' => '发布成功!','data' => $result);
            print json_encode($response);
        }
    }
}