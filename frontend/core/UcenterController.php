<?php
namespace frontend\core;

/**
* 登陆公用Controller
* 
* @author NJ 2016年09月11日22:07:25
* 
*/
class UcenterController extends \common\controllers\BaseController
{

    public $userInfo;
    public function init()
    {
        // login validate
        $user_sess = $this->getSess('frontend');
        if ( $user_sess ) {
            // assign user info
            $this->userInfo = $user_sess;
        } else {
            // login page
            $this->redirect('/entry/login');
        }
        
    }


}

















