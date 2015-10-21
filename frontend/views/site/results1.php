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
<!--            <h2>Results taken from --><?php //foreach($resultsFrom as $resultFrom) { echo $resultFrom->getPart0()->one()->name . ' '; } ?><!--</h2>-->
            <h2>Your business is a <?= $results[$selected]->name ?></h2>
    <br /><br />

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-6">
            <?php foreach ($results as $key => $result) { ?>
                <?php if (($key%2) === 0) { ?>
                    <div class="row flex">
                <?php } ?>
                        <div class="col-md-6 results-tiles<?= ($selected === $key) ? ' selected-result' : '' ?>" role="tablist">
                            <div role="presentation" class="text-justify<?= ($selected === $key) ? ' active' : '' ?>">
                                <a href="#result<?= $result->id ?>" aria-controls="result<?= $result->id ?>" role="tab" data-toggle="tab">
                                    <img src="..\frontend\assets\img\<?= $result->small_photo ?>" alt="<?= $result->name ?>" class="img img-responsive img-results center-block">
                                    <div class="results-text">
                                        <?= $result->description ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php if (($key%2) !== 0) { ?>
                    </div>
                <?php } ?>
            <?php } ?>
            </div>
            <div class="col-md-6 blueish-bg tab-content text-justify">
                <?php foreach ($results as $key => $result) { ?>
                    <div id="result<?= $result->id ?>" role="tabpanel" class="tab-pane fade<?= ($selected === $key) ? ' in active' : '' ?>">
                        <h3 class="text-center"><?= $result->name ?></h3>
                        <?= $result->text ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <br /><br />

    <?= Html::a('Next Result', ['results/' . ($id + 1)], ['class' => 'btn btn-primary btn-block']) ?>
</div>
