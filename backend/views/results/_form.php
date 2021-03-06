<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\Results $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
                <?= $model->name ?>        </h2>
    </div>

    <div class="panel-body">

        <div class="results-form">

            <?php $form = ActiveForm::begin([
            'id' => 'Results',
            'layout' => 'horizontal',
            'enableClientValidation' => true,
            'errorSummaryCssClass' => 'error-summary alert alert-error'
            ]
            );
            ?>

            <div class="">
                <?php $this->beginBlock('main'); ?>

                <p>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description')->widget(\yii\redactor\widgets\Redactor::className()) ?>
            <?= $form->field($model, 'text')->widget(\yii\redactor\widgets\Redactor::className()) ?>
            <?= // generated by schmunk42\giiant\generators\crud\providers\RelationProvider::activeField
            $form->field($model, 'results_page')->dropDownList(
                \yii\helpers\ArrayHelper::map(common\models\ResultsPage::find()->all(), 'id', 'name'),
                ['prompt' => 'Select']
            ); ?>
            <?= $form->field($model, 'small_photo')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'big_photo')->textInput(['maxlength' => true]) ?>
                </p>
                <?php $this->endBlock(); ?>
                
                <?=
    Tabs::widget(
                 [
                   'encodeLabels' => false,
                     'items' => [ [
    'label'   => 'Results',
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
