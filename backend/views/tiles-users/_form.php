<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\TilesUsers $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
                <?= $model->id ?>        </h2>
    </div>

    <div class="panel-body">

        <div class="tiles-users-form">

            <?php $form = ActiveForm::begin([
            'id' => 'TilesUsers',
            'layout' => 'horizontal',
            'enableClientValidation' => true,
            'errorSummaryCssClass' => 'error-summary alert alert-error'
            ]
            );
            ?>

            <div class="">
                <?php $this->beginBlock('main'); ?>

                <p>
                    
			<?= $form->field($model, 'id')->textInput() ?>
			<?= // generated by schmunk42\giiant\generators\crud\providers\RelationProvider::activeField
$form->field($model, 'tile')->dropDownList(
    \yii\helpers\ArrayHelper::map(common\models\Tiles::find()->all(), 'id', 'name'),
    ['prompt' => 'Select']
); ?>
			<?= // generated by schmunk42\giiant\generators\crud\providers\RelationProvider::activeField
$form->field($model, 'level')->dropDownList(
    \yii\helpers\ArrayHelper::map(common\models\Levels::find()->all(), 'id', 'id'),
    ['prompt' => 'Select']
); ?>
			<?= $form->field($model, 'created_at')->textInput() ?>
			<?= $form->field($model, 'updated_at')->textInput() ?>
			<?= $form->field($model, 'created_by')->textInput() ?>
			<?= $form->field($model, 'updated_by')->textInput() ?>
                </p>
                <?php $this->endBlock(); ?>
                
                <?=
    Tabs::widget(
                 [
                   'encodeLabels' => false,
                     'items' => [ [
    'label'   => 'TilesUsers',
    'content' => $this->blocks['main'],
    'active'  => true,
], ]
                 ]
    );
    ?>
                <hr/>
                <?php echo $form->errorSummary($model); ?>
                <?= Html::submitButton(
                '<span class="glyphicon glyphicon-check"></span> ' .
                ($model->isNewRecord ? 'Create' : 'Save'),
                [
                    'id' => 'save-' . $model->formName(),
                    'class' => 'btn btn-success'
                ]
                );
                ?>

                <?php ActiveForm::end(); ?>

            </div>

        </div>

    </div>

</div>