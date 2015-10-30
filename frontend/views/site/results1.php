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
            <h2 class="apantisi">Your business is a <?= $results[$selected]->name ?></h2>
    <br /><br />

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-4">

                <p class="text-center">Click on the tiles to get more information</p>
                <img src="http://dbi-playground.epu.ntua.gr/frontend/assets/img/DigitalBusiness.gif" alt="" usemap="#map1446203910249" class="map center-block img img-responsive" >
                <map id="map1446203910249" name="map1446203910249">
                    <area shape="rect" coords="82,14,196,127" title="Digital Defender" alt="Digital Defender" href="#result2" role="tab" data-toggle="tab" <?= ($selected === 1) ? 'class="active"' : '' ?>>
                    <area shape="rect" coords="202,13,315,128" title="Digital Analyzer" alt="Digital Analyzer" href="#result4" role="tab" data-toggle="tab" <?= ($selected === 3) ? 'class="active"' : '' ?>>
                    <area shape="rect" coords="84,134,195,245" title="Digital Reactor" alt="Digital Reactor" href="#result1" role="tab" data-toggle="tab" <?= ($selected === 0) ? 'class="active"' : '' ?>>
                    <area shape="rect" coords="202,132,316,247" title="Digital Prospector" alt="Digital Prospector" href="#result3" role="tab" data-toggle="tab" <?= ($selected === 2) ? 'class="active"' : '' ?>>
                </map>

            </div>
            <div class="col-md-8 blueish-bg tab-content text-justify">
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
