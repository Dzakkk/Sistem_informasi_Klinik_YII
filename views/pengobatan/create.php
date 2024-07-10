<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengobatan */
/* @var $tindakan app\models\Tindakan[] */
/* @var $medications app\models\Obat[] */

$this->title = 'Create Pengobatan';
$this->params['breadcrumbs'][] = ['label' => 'Pengobatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengobatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'pasien' => $pasien,
        'tindakan' => $tindakan,
        'obat' => $obat,
    ]) ?>

</div>
