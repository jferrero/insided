<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'thread_id')->textInput() ?>

    <?= $form->field($model, 'post_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_image_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_created_at')->textInput() ?>

    <?= $form->field($model, 'post_created_by')->textInput() ?>

    <?= $form->field($model, 'post_updated_at')->textInput() ?>

    <?= $form->field($model, 'post_updated_by')->textInput() ?>

    <?= $form->field($model, 'post_deleted_at')->textInput() ?>

    <?= $form->field($model, 'post_deleted_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
