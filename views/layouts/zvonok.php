<?php 
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
?>
<!-- Модальное окно -->  
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
<?php
use app\models\ZvonokForm;
$zvonok = new ZvonokForm();
?>
<?php $form = yii\widgets\ActiveForm::begin(); ?>
<?= $form->field($zvonok, 'telephone') ?>
<?=$form->field($zvonok, 'soglasye')->checkbox();?>
<?= yii\helpers\Html::submitButton('Отправить'); ?>
<?php yii\widgets\ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_POST['ZvonokForm'])) {

$telephone1 = htmlspecialchars($_POST['ZvonokForm']['telephone']);
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'a120671@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'blsr37lwx5z'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('a120671@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('samara-dialog@yandex.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$telephone1 . ' оставил заявку, его телефон ' .$phone1. '<br>Почта этого пользователя: ***';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    echo '<hr><a href="" class="window-tel1"><p><span>Ваша заявка принята</span> <i>&#10006;</i></p></a>';
}
}
?>
