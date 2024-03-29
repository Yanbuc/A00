<?php
namespace Admin\Controller;
use \Common\Controller\AdminController;
use Common\Filter\FilterFunction;
use \Common\Service\UsersService;

class IndexController extends AdminController {

    public function index(){
        $isLogin=$this->checkIsLogin();
        if($isLogin){
            $this->logSuccess();
            return ;
        }
        $this->display("Index/index");
    }

    public function checkLoginIn(){
        $data=I('post.');
        $userName=$data['username'];
        $pwd=$data["password"];
        // 过滤接收到的数据
        $userName=FilterFunction::filterUserName($userName);
        $pwd=FilterFunction::filterPasswd($pwd);
        if(empty($userName) || empty($pwd)){
            $this->index();
            return ;
        }
        $data=$this->checkUserName($userName);
        $data=$data[0];
        $isTrue=$this->checkPwd($pwd,$data);
        if($isTrue){
            $this->assign("username",$data["useralis"]);
            $this->assign("userId",$data["id"]);
            $this->setSessionName($data["useralis"]);
            $_SESSION["user_id"]=$data["id"];
            $this->logSuccess();
            return ;
        }
        $this->index();
    }


    public  function  logSuccess(){
        $this->assign("username",$_SESSION["username"]);
        $this->assign("userId",$_SESSION["user_id"]);
        $this->display('Index/admin');
    }

    // 检查是否已经登陆
    private function checkIsLogin(){
        $tmp=C("SESSION_NAME");
        if(isset($_SESSION[$tmp])){
            return true;
        }
        return false;
    }

    // 检查用户名是否正确
    private function checkUserName($userName){

       $userService=new UsersService();
       $data=$userService->getUserDataByUserName($userName);
       return $data;
    }
    // 检查密码是否正确
    private  function  checkPwd($pwd,$data){
        $newPd=md5($pwd);
        $newPd=substr($newPd,0,16);
        if($newPd==$data["password"]){
            return true;
        }
        return false;
    }
    // 设置session
    private function setSessionName($userName){
         $tmp=C("SESSION_NAME");
         $_SESSION[$tmp]=$userName;
    }
    private function  deleteSessionName(){
        $tmp=C("SESSION_NAME");
        unset($_SESSION[$tmp]);
    }

    //退出登陆
    public  function logout(){
        $this->deleteSessionName();
        $this->index();
    }

    public function admin(){
        $this->index();
        return ;
    }

}