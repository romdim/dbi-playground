<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\ResultsPage $model
 */

$this->title = 'Results Page ' . $model->name . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Results Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud results-page-update">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </p>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
