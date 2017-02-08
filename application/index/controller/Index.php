<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\user as user;  //引入空间类文件，并且取别名，因为当前类名也是Link
class Index
{

 //  protected function _initialize()
 // {
 //    // 模板输出替换
 //    $this->view->replace([
 //        '__index__' =>  __ROOT__. '/index',         // 静态资源存放目录
 //        '__CSS__'    =>  __ROOT__. '/index/css',     // CSS目录
 //        '__JS__'     =>  __ROOT__. '/index/js',      // JS目录
 //        '__IMG__'    =>  __ROOT__. '/index/img',     // image目录
 //        '__LIBS__'   =>  __ROOT__. '/index/libs',    // libs
 //    ]);
 // }
  function index(){
  	 return view('index');
  }

  function test(){
  	echo  789;
  }

}
