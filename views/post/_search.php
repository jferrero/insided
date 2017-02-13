<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostQuery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'post_id') ?>

    <?= $form->field($model, 'thread_id') ?>

    <?= $form->field($model, 'post_title') ?>

    <?= $form->field($model, 'post_comment') ?>

    <?= $form->field($model, 'post_image_link') ?>

    <?php // echo $form->field($model, 'post_created_at') ?>

    <?php // echo $form->field($model, 'post_created_by') ?>

    <?php // echo $form->field($model, 'post_updated_at') ?>

    <?php // echo $form->field($model, 'post_updated_by') ?>

    <?php // echo $form->field($model, 'post_deleted_at') ?>

    <?php // echo $form->field($model, 'post_deleted_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
