<?php

use dmstr\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\Parts $model
*/

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Parts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="parts-view">

    <h1><?= $model->name ?> </h1>

    <?php
        $form = ActiveForm::begin([
            'id' => 'part-form',
            'options' => ['class' => 'form-horizontal'],
        ])
    ?>
    <?php // $form->field($model, 'username') ?>

    <?php foreach($model->getQuestions()->all() as $question) {?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2><?= $question->question ?></h2>
        </div>

        <div class="panel-body">
            <?php foreach($question->getAnswers()->all() as $answers) {?>
            <?= $form->field($model, 'question')->radioList($answers) ?>
            <?php // $answers->answer ?>
            <?php } ?>
        </div>
    </div>
    <?php } ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end() ?>
</div>
