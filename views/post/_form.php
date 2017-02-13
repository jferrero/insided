<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

<?php
        $request = Yii::$app->request;
        $get = $request->get();
        $threadId = $get['1']['threadId'];
    ?>

    <?= $form->field($model, 'thread_id')->hiddenInput(['value'=> $threadId])->label(false); ?>

    <?= $form->field($model, 'post_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_image_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_created_by')->hiddenInput(['value'=> 1])->label(false); ?>

    <?= $form->field($model, 'post_updated_by')->hiddenInput(['value'=> 1])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
