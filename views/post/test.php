<?php

    use yii\widgets\ActiveForm;
    use yii\helpers\Html;

?>

<h1>Test Action</h1>

<?php //debug($model); ?>

<?php if(Yii::$app->session->hasFlash('success')): ?>

    <div class="alert alert-success" role="alert">
        <strong><?= Yii::$app->session->getFlash('success'); ?></strong>
    </div>

<?php endif; ?>

<?php if(Yii::$app->session->hasFlash('error')): ?>

    <div class="alert alert-danger" role="alert">
        <strong><?= Yii::$app->session->getFlash('error'); ?></strong>
    </div>

<?php endif; ?>

<?php $form = ActiveForm::begin(['id' => 'testForm']); ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email')->input('email') ?>
    <?= $form->field($model, 'text')->textarea(['rows'=> 5]) ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php $form = ActiveForm::end(); ?>
