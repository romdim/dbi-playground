<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\Questions $questions[]
* @var common\models\Answers $answers[]
* @var common\models\Parts $part
* @var bool $pass
* @var array $answersUsers
*/

$this->title = $part->name;
?>
<div class="part-view">

    <h1><?= $part->getStep0()->one()->name ?> </h1>
    <h2><?= $part->name ?> </h2>

    <?= (!$pass) ? '<div class="text-danger">Please select an answer in all questions</div><br />' : '' ?>

    <?php
        $form = ActiveForm::begin([
            'id' => 'part-form',
//            'options' => ['class' => 'form-horizontal'],
        ])
    ?>

    <?php foreach($questions as $key => $question) {?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2><?= $question->question ?></h2>
        </div>

        <div class="panel-body">
            <div class="form-group field-answersusers-answer has-success">
                <input type="hidden" name="AnswersUsers[answer<?= $key ?>]" value="">
                <div id="answersusers-answerr<?= $key ?>">
                    <?php foreach($answers[$key] as $id => $answer) { ?>
                        <label class="modal-radio"><input type="radio" name="AnswersUsers[answer<?= $key ?>]" value="<?= $id ?>" <?= in_array($id, $answersUsers, null) ? 'checked="checked"' : ''?>> <?= $answer ?></label><br />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-block']) ?>
    </div>
    <?php ActiveForm::end() ?>
</div>
