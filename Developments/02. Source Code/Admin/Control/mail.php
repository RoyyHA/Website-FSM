<?php
require_once("Model/mail_db.php");

class Mail_CT
{
    var $mail_md;

    public function __construct()
    {
        $this->mail_md = new mail();
    }

    public function list()
    {
        $data = $this->mail_md->list_all_method();
        require_once("View/index.php");
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->mail_md->delete($id);
        header('Location:?act=order');
    }

    function detail()
    {
        $id   = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->mail_md->detail_mail($id);
        require_once("View/index.php");
    }

    public function go_reply()
    {
        $id   = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->mail_md->find($id);
        require_once("View/index.php");
    }

    public function sending()
    {
        include __DIR__.'/PHPMailer/class.smtp.php';
        include __DIR__.'/PHPMailer/class.phpmailer.php';

        $nFrom = "FSM-Prominent";    //mail duoc gui tu dau, thuong de ten cong ty ban
        $mFrom = 'websitedonghotrungphu@gmail.com';  //dia chi email cua ban
        $mPass = 'yokhjwjngslbqqlx';       //mat khau email cua ban
        $nTo = 'TrungPhuNA'; //Ten nguoi nhan
        $mTo = $_POST['email'];
        $mail             = new PHPMailer();

        $body             = $_POST['reply'];
        $title = 'Reply from Website-FSM';   //Tieu de gui mail
        $mail->IsSMTP();
        $mail->CharSet  = "utf-8";
        $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
        $mail->SMTPAuth   = true;    // enable SMTP authentication
        $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";    // sever gui mail.
        $mail->Port       = 465;         // cong gui mail de nguyen
        // xong phan cau hinh bat dau phan gui mail
        $mail->Username   = $mFrom;  // khai bao dia chi email
        $mail->Password   = $mPass;              // khai bao mat khau
        $mail->SetFrom($mFrom, $nFrom);
        $mail->AddReplyTo('info@freetuts.net', 'Freetuts.net'); //khi nguoi dung phan hoi se duoc gui den email nay
        $mail->Subject    = $title;// tieu de email
        $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
        $mail->AddAddress($mTo, $nTo);

        if ($mail->send()) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            $status   = "failed";
            $response = "Something is wrong: <br>" . $mail->ErrorInfo;
        }
        exit(json_encode(array("status" => $status, "response" => $response)));

    }
}
