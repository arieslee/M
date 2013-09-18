<?php
/**
 * @link https://github.com/MaGuowei
 * @copyright 2013 maguowei.com
 * @author Ma Guowei <imaguowei@gmail.com>
 */

namespace Mlog\Controller;

use Mlog\Model\User;

/**
 * 管理员管理部分
 *
 * 只有管理员有权限进行查看和操作
 *
 * Class Admin
 * @package Mlog\Controller
 */
class Admin extends Common
{
    public $data = array(
        'title' => 'Admin',
        'nav' => array('管理员主页'=>'Admin/index'),
    );

    public function index()
    {
        $this->checkAdminPower();

        $this->display('Admin/index');
    }

    public function user()
    {
        $this->checkAdminPower();
        $this->data['title'] = '用户列表';
        $User = new User();
        $user = $User->select();
        $this->assign('user', $user);
        $this->display('Admin/user');
    }

    public function setting()
    {
        $this->checkAdminPower();

        $this->display('Admin/setting');
    }

    /**
     * 管理员权限检查
     */
    public function checkAdminPower()
    {
        $this->checkPower();
        if($_SESSION['username']!='admin')
        {
            $this->error('您不具备访问权限');
            exit();
        }
    }
}