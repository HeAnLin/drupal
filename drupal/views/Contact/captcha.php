<?php



use yii\captcha\Captcha; 
?>



<?= $form->field($model, 'verifyCode', [
        'options' => ['class' => 'form-group form-group-lg'],
])->widget(Captcha::className(),[
       'template' => "{image}",
       'imageOptions' => ['alt' => '验证码'],
]); ?>