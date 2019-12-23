<?php
class getIndexController {

    private $conn,$postParams;

    public function connect() {
        require_once('./config/config.php');
        $this->conn = M('mysql')->connect($config);
        $this->postParams = isset($GLOBALS['HTTP_RAW_POST_DATA'])?$GLOBALS['HTTP_RAW_POST_DATA']:file_get_contents("php://input");
    }

    /**
     * 首页列表
     * nums、page、category
     */
    public function followBlogList() {
        $this->connect();
        $postParams = json_decode($this->postParams);
        if(!isset($postParams->nums) || !isset($postParams->page) || !isset($postParams->category_id)) {
            $response = array('code' => 400,'msg' => '参数错误！');
            print json_encode($response);
        } else {
            $page = $postParams->page;
            $nums = $postParams->nums;
            $category_id = $postParams->category_id;
            $sql = M('news')->findData_Category_ByPage('articles',$page,$nums,$category_id);
            $result = M('mysql')->query($this->conn,$sql);
            $response = array('code' => 200,'msg' => '请求成功','data' => $result);
            print json_encode($response);
        }
    }

    /**
     * 模糊查询
     */
    public function search() {
        $this->connect();
        $postParams = json_decode($this->postParams);
        if(!isset($postParams->keywords) || !isset($postParams->page) || !isset($postParams->nums)) {
            $response = array('code' => 400,'msg' => '参数错误！');
            print json_encode($response);
        } else {
            $page = $postParams->page;
            $nums = $postParams->nums;
            $keywords = $postParams->keywords;
            $sql = M('news')->find_like('blog_articles',$page,$nums,$keywords);
            $result = M('mysql')->query($this->conn,$sql);
            $response = array('code' => 200,'msg' => '请求成功','data' => $result);
            print json_encode($response);
        }
    }

    /**
     * 登录
     * iphone、password
     */
    public function login() {
        $this->connect();
        $postParams = json_decode($this->postParams);
        if(!isset($postParams->iphone) || !isset($postParams->password)) {
            $response = array('code' => 400,'msg' => '参数错误！');
            print json_encode($response);
        }
        else {
            $iphone = $postParams->iphone;
            $password = $postParams->password;
            $sql = M('news')->findSome('user', 'iphone', $iphone);
            $result = M('mysql')->query($this->conn,$sql);
            if(!sizeof($result)) {
                $response = array('code' => 201,'msg' => '用户名不存在！','data' => $result);
                print json_encode($response);
            } else {
                foreach($result as $value) {
                    if($value['password'] == $password) {
                        $response = array('code' => 200,'msg' => '登录成功！','data' => $result[0]);
                    } else {
                        $response = array('code' => 201,'msg' => '密码错误！');
                    }
                }
                print json_encode($response);
            }
        }
    }

    /**
     * 修改用户资料
     */
    public function update_profile() {
        $this->connect();
        $postParams = json_decode($this->postParams);
        if(!isset($postParams->id) || !isset($postParams->name) || !isset($postParams->autograph)) {
            $response = array('code' => 400,'msg' => '参数错误！');
            print json_encode($response);
        } else {
            $id = $postParams->id;
            $name = $postParams->name;
            $autograph = $postParams->autograph;
            $sql = M('news')->update_user('user', $name, $autograph, $id);
            $result = M('mysql')->query($this->conn, $sql);
            if($result) {
                $sql = M('news')->findSome('user','id', $id);
                $result = M('mysql')->query($this->conn, $sql);
                $response = array('code' => 200,'msg' => '修改成功！','data' => $result[0]);
            } else {
                $response = array('code' => 201,'msg' => '修改失败！','data' => $result);
            }
            print json_encode($response);
        }
    }

    /**
     * 文章查询
     */
    public function article_detail() {
        $this->connect();
        $postParams = json_decode($this->postParams);
        if(!isset($postParams->id)) {
            $response = array('code' => 400,'msg' => '参数错误！');
            print json_encode($response);
        } else {
            $id = $postParams->id;
            $sql = M('news')->findSome('articles','id',$id);
            $result = M('mysql')->query($this->conn, $sql);
            $response = array('code' => 200,'msg' => '请求成功！','data' => $result[0]);
            print json_encode($response);
        }
    }
}