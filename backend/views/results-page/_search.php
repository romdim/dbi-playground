<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\ResultsPageSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="results-page-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'created_at') ?>

		<?= $form->field($model, 'updated_at') ?>

		<?= $form->field($model, 'created_by') ?>

		<?php // echo $form->field($model, 'updated_by') ?>

		<div class="form-group">
			<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
