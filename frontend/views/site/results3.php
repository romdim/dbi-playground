<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\ResultsPage $resultsPage
* @var common\models\ResultFrom $resultsFrom[]
* @var common\models\Results $results[]
 * @var int $selected
 * @var int $id
*/

$this->title = $resultsPage->name;
?>
<div class="part-view">

    <h1><?= $resultsPage->name ?></h1>

    <div class="block-center">
        <img src="..\frontend\assets\img\<?= $results[$selected]->big_photo ?>" alt="<?= $resultsPage->name ?>" class="img img-responsive">
    </div>

    <br />

    <div class="blueish-bg tab-content text-justify">
                <?= $results[$selected]->text ?>
    </div>

    <br /><br />

    <?= Html::a('Need more detailed results?', ['more/'], ['class' => 'btn btn-primary btn-block']) ?>
</div>
