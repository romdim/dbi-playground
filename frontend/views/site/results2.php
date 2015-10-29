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
    <h2>Your business is mostly interested in <?= $results[$selected]->name ?></h2>
    <br /><br />

<!--    <div class="container-fluid">-->
<!--        <div class="row-fluid">-->
<!--            <div class="col-md-6">-->
    <img src="http://dbi-playground.epu.ntua.gr/frontend/assets/img/GlobalChallenges.png" alt="Digital Challenges" class="center-block img img-responsive" usemap="#map1446127205173">
    <map id="map1446127205173" name="map1446127205173">
        <area shape="rect" coords="0,264,217,485" title="GC1" alt="GC1" href="#result5" role="tab" data-toggle="tab">
        <area shape="rect" coords="346,179,585,433" title="GC2" alt="GC2" href="#result6" role="tab" data-toggle="tab">
        <area shape="rect" coords="592,0,829,228" title="GC3" alt="GC3" href="#result7" role="tab" data-toggle="tab">
        <area shape="rect" coords="745,234,985,496" title="GC4" alt="GC4" href="#result8" role="tab" data-toggle="tab">
    </map>

    <br /><br />

    <div class="blueish-bg tab-content text-justify">
        <?php foreach ($results as $key => $result) { ?>
            <div id="result<?= $result->id ?>" role="tabpanel" class="tab-pane fade<?= ($selected === $key) ? ' in active' : '' ?>">
                <h3 class="text-center"><?= $result->name ?></h3>
                <?= $result->text ?>
            </div>
        <?php } ?>
    </div>

    <br /><br />

    <?= Html::a('Next Result', ['results/' . ($id + 1)], ['class' => 'btn btn-primary btn-block']) ?>
</div>
