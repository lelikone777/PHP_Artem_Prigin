<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>INDEX ACTION</h1>

<?php
//debug($model);
?>
<?php    $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal', 'id' => 'test-form']]) ?>
    <?php echo  $form->field($model, 'name')->label('Имя')?>
    <?php echo  $form->field($model, 'password')->label('Пароль')->input('password')?>
    <?php echo  $form->field($model, 'email')->input('email')?>
<!--    --><?php //echo  $form->checkbox($model, 'checkbox')->checkbox()?>
    <?php echo  $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows' => 3])?>



    <?php echo  Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php    $form = ActiveForm::end() ?>