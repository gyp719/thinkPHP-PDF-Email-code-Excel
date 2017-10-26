<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
	
	public function pdf(){
        $content=$_POST['content'];
        pdf($content);
    }

    /**
     * 生成二维码
     */
    public function qrcode(){
        $url=I('post.url');
        qrcode($url);
    }

    /**
     * 导出xsl文件
     */
    public function xsl(){
        $data = I('post.data');
        create_xls($data);
    }

    /**
     * 导入xsl文件
     */
    public function import_xls(){
        $data=import_excel('./Public/simple.csv');
        print_r($data);
    }

    /**
     * 导出csv文件
     */
    public function csv(){
        $data=I('post.data');
        array_walk($data, function(&$v){
            $v=implode(',', $v);
        });
        create_csv($data);
    }

    /**
     * 导入csv文件
     */
    public function import_csv(){
        $data=file_get_contents('./Public/simple.csv');
        $data=explode("\r\n", $data);
        print_r($data);
    }

    /**
     * 发送邮件
     */
    public function send_email(){
        $email=I('post.email');
        $result=send_email($email,'邮件标题','邮件内容');
        if ($result['error']==1) {
            print_r($result);die;
        }
        $this->success('发送完成',U('Home/Index/index'));
    }


}