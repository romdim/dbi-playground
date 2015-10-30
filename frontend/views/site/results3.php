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
    <h2 class="apantisi"><?= $results[$selected]->name ?></h2>

    <div class="block-center">
        <?php switch ($selected) {
            case 0:
                echo '<img src="http://dbi-playground.epu.ntua.gr/frontend/assets/img/Agriculture-Fishing.png" alt="" usemap="#map1446214778864" class="img img-responsive">
                    <map id="map1446214778864" name="map1446214778864">
                        <area shape="rect" coords="197,161,213,173" title="Autonomous Vehicle" alt="Autonomous Vehicle" href="#autonomous" target="_self">
                        <area shape="rect" coords="220,83,234,97" title="5G" alt="5G" href="#5G" target="_self"><area shape="rect" coords="262,81,276,95" title="Smart Dust" alt="Smart Dust" href="#smart-dust" target="_self">
                        <area shape="rect" coords="270,105,284,117" title="Smart Machines/Ubiquitous computing" alt="Smart Machines/Ubiquitous computing" href="#smart-machines" target="_self">
                        <area shape="rect" coords="274,125,289,138" title="Machine Intelligence" alt="Machine Intelligence" href="#machine-intelligence" target="_self">
                        <area shape="rect" coords="281,147,294,159" title="Ambient Intelligence" alt="Ambient Intelligence" href="#ambient-intelligence" target="_self">
                        <area shape="rect" coords="286,177,298,189" title="Prescriptive Analytics" alt="Prescriptive Analytics" href="#prescriptive-analytics" target="_self">
                        <area shape="rect" coords="303,262,315,272" title="Quantified Self" alt="Quantified Self" href="#quantified-self" target="_self">
                        <area shape="rect" coords="315,286,329,297" title="Wearable/Ultra-portable computing" alt="Wearable/Ultra-portable computing" href="#wearable" target="_self">
                        <area shape="rect" coords="349,322,360,332" title="Drones" alt="Drones" href="#drones" target="_self">
                        <area shape="rect" coords="449,305,459,315" title="Internet of Things" alt="Internet of Things" href="#internet-of-things" target="_self">
                        <area shape="rect" coords="484,283,498,295" title="Big Data" alt="Big Data" href="#big-data" target="_self">
                        <area shape="rect" coords="654,229,665,239" title="APIs/Web of Things" alt="APIs/Web of Things" href="#apis" target="_self">
                        <area shape="rect" coords="742,218,756,231" title="LTE (Long Term Evolution 4G)" alt="LTE (Long Term Evolution 4G)" href="#LTE" target="_self">
                    </map>';
                break;
            case 1:
                echo '<img src="http://dbi-playground.epu.ntua.gr/frontend/assets/img/Fashion-Creative.png" alt="" usemap="#map1446215601514" class="img img-responsive">
                    <map id="map1446215601514" name="map1446215601514">
                        <area shape="rect" coords="218,95,232,109" title="5G" alt="5G" href="#5G" target="_self">
                        <area shape="rect" coords="283,196,297,208" title="Prescriptive Analytics" alt="Prescriptive Analytics" href="#prescriptive-analytics" target="_self">
                        <area shape="rect" coords="293,243,309,258" title="Volumetric & Holographic 3D Displays" alt="Volumetric & Holographic 3D Displays" href="#volumetric" target="_self">
                        <area shape="rect" coords="300,285,319,299" title="Quantified Self" alt="Quantified Self" href="#quantified-self" target="_self">
                        <area shape="rect" coords="312,312,330,326" title="Wearable/Ultra-portable computing" alt="Wearable/Ultra-portable computing" href="#wearable" target="_self"><area shape="rect" coords="445,332,455,342" title="Internet of Things" alt="Internet of Things" href="#internet-of-things" target="_self">
                        <area shape="rect" coords="482,310,495,322" title="Big Data" alt="Big Data" href="#big-data" target="_self">
                        <area shape="rect" coords="509,296,520,307" title="Mobile Money" alt="Mobile Money" href="#mobile-money" target="_self">
                        <area shape="rect" coords="541,276,553,291" title="Enterprise 3D Printing" alt="Enterprise 3D Printing" href="#enterprise-3d-printing" target="_self">
                        <area shape="rect" coords="572,265,587,279" title="Crowdsourcing" alt="Crowdsourcing" href="#crowdsourcing" target="_self">
                        <area shape="rect" coords="591,259,607,278" title="Natural Language Search/Natural Language Question Answering" alt="Natural Language Search/Natural Language Question Answering" href="#nls" target="_self">
                        <area shape="rect" coords="611,256,629,271" title="Gamification" alt="Gamification" href="#gamification" target="_self">
                        <area shape="rect" coords="645,247,665,266" title="APIs/Web of Things" alt="APIs/Web of Things" href="#apis" target="_self">
                        <area shape="rect" coords="703,243,719,257" title="Responsive and Adaptive Web Design" alt="Responsive and Adaptive Web Design" href="#responsive" target="_self">
                        <area shape="rect" coords="729,243,747,256" title="LTE (Long Term Evolution 4G)" alt="LTE (Long Term Evolution 4G)" href="#LTE" target="_self">
                    </map>';
                break;
            case 2:
                echo '<img src="http://dbi-playground.epu.ntua.gr/frontend/assets/img/Tourism.png" alt="" usemap="#map1446216119056" class="img img-responsive">
                    <map id="map1446216119056" name="map1446216119056">
                        <area shape="rect" coords="185,154,200,169" title="Autonomous Vehicles" alt="Autonomous Vehicles" href="#autonomous" target="_self">
                        <area shape="rect" coords="203,76,222,92" title="5G" alt="5G" href="#5G" target="_self">
                        <area shape="rect" coords="267,170,283,183" title="Prescriptive Analytics" alt="Prescriptive Analytics" href="#prescriptive-analytics" target="_self">
                        <area shape="rect" coords="275,214,293,231" title="Volumetric & Holographic 3D Displays" alt="Volumetric & Holographic 3D Displays" href="#volumetric" target="_self">
                        <area shape="rect" coords="293,277,313,293" title="Wearable/Ultra-portable computing" alt="Wearable/Ultra-portable computing" href="#wearable" target="_self">
                        <area shape="rect" coords="419,294,435,307" title="Internet of Things" alt="Internet of Things" href="#internet-of-things" target="_self">
                        <area shape="rect" coords="455,276,469,290" title="Big Data" alt="Big Data" href="#big-data" target="_self">
                        <area shape="rect" coords="475,262,494,275" title="Mobile Money" alt="Mobile Money" href="#mobile-money" target="_self">
                        <area shape="rect" coords="537,234,554,247" title="Crowdsourcing" alt="Crowdsourcing" href="#crowdsourcing" target="_self">
                        <area shape="rect" coords="559,228,573,245" title="Natural Language Search/Natural Language Question Answering" alt="Natural Language Search/Natural Language Question Answering" href="#NLS" target="_self">
                        <area shape="rect" coords="577,227,592,239" title="Gamification" alt="Gamification" href="#gamification" target="_self">
                        <area shape="rect" coords="612,220,626,234" title="APIs/Web of Things" alt="APIs/Web of Things" href="#apis" target="_self">
                        <area shape="rect" coords="647,225,661,240" title="Virtual Currency" alt="Virtual Currency" href="#virtual-currency" target="_self">
                        <area shape="rect" coords="665,211,681,225" title="Responsive and Adaptive Web Design" alt="Responsive and Adaptive Web Design" href="#responsive" target="_self">
                        <area shape="rect" coords="687,215,705,227" title="LTE (Long Term Evolution 4G)" alt="LTE (Long Term Evolution 4G)" href="#LTE" target="_self">
                    </map>';
                break;
            case 3:
                echo '<img src="http://dbi-playground.epu.ntua.gr/frontend/assets/img/Food-Drink.png" alt="" usemap="#map1446215829488" class="img img-responsive">
                    <map id="map1446215829488" name="map1446215829488">
                        <area shape="rect" coords="277,134,291,144" title="Machine Intelligence" alt="Machine Intelligence" href="#machine-intelligence" target="_self">
                        <area shape="rect" coords="286,186,302,198" title="Prescriptive Analytics" alt="Prescriptive Analytics" href="#prescriptive-analytics" target="_self">
                        <area shape="rect" coords="315,298,332,313" title="Wearable/Ultra-portable computing" alt="Wearable/Ultra-portable computing" href="#wearable" target="_self">
                        <area shape="rect" coords="350,337,365,352" title="Drones" alt="Drones" href="#drones" target="_self">
                        <area shape="rect" coords="448,317,464,332" title="Internet of Things" alt="Internet of Things" href="#internet-of-things" target="_self">
                        <area shape="rect" coords="487,295,505,311" title="Big Data" alt="Big Data" href="#big-data" target="_self">
                        <area shape="rect" coords="578,253,594,270" title="Crowdsourcing" alt="Crowdsourcing" href="#crowdsourcing" target="_self">
                        <area shape="rect" coords="620,245,638,259" title="Gamification" alt="Gamification" href="#gamification" target="_self">
                    </map>';
                break;
            case 4:
                echo '<img src="http://dbi-playground.epu.ntua.gr/frontend/assets/img/Construction.png" alt="" usemap="#map1446215267145" class="img img-responsive">
                    <map id="map1446215267145" name="map1446215267145">
                        <area shape="rect" coords="197,175,212,188" title="Autonomous Vehicles" alt="Autonomous Vehicles" href="#autonomous" target="_self">
                        <area shape="rect" coords="262,90,277,103" title="Smart Dust" alt="Smart Dust" href="#smart-dust" target="_self">
                        <area shape="rect" coords="276,137,289,151" title="Machine Intelligence" alt="Machine Intelligence" href="#machine-intelligence" target="_self">
                        <area shape="rect" coords="286,191,299,207" title="Prescriptive Analytics" alt="Prescriptive Analytics" href="#prescriptive-analytics" target="_self">
                        <area shape="rect" coords="296,241,310,255" title="Volumetric & Holographic 3D Displays" alt="Volumetric & Holographic 3D Displays" href="#volumetric" target="_self">
                        <area shape="rect" coords="349,344,364,360" title="Drones" alt="Drones" href="#drones" target="_self">
                        <area shape="rect" coords="447,327,460,340" title="Internet of Things" alt="Internet of Things" href="#internet-of-things" target="_self">
                        <area shape="rect" coords="485,305,499,319" title="Big Data" alt="Big Data" href="#big-data" target="_self">
                        <area shape="rect" coords="543,273,558,289" title="Enterprise 3D Printing" alt="Enterprise 3D Printing" href="#enterprise-3d-printing" target="_self">
                        <area shape="rect" coords="576,261,588,275" title="Crowdsourcing" alt="Crowdsourcing" href="#crowdsourcing" target="_self">
                        <area shape="rect" coords="616,254,630,265" title="Gamification" alt="Gamification" href="#gamification" target="_self">
                        <area shape="rect" coords="652,247,666,262" title="APIs/Web of Things" alt="APIs/Web of Things" href="#apis" target="_self">
                    </map>';
                break;
        } ?>
    </div>

    <br />

    <div class="blueish-bg tab-content text-justify">
                <?= $results[$selected]->text ?>
    </div>

    <br /><br />

    <?= Html::a('Need more detailed results?', ['more/'], ['class' => 'btn btn-primary btn-block']) ?>
</div>
