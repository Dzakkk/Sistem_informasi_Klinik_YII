<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this  */
/** @var app\models\Pengobatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengobatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($pasien, 'id', 'nama_pasien'),
        ['prompt' => 'Select pasien']
    ) ?>

    <?= $form->field($model, 'action_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($tindakan, 'id', 'tindakan'),
        ['prompt' => 'Select Action']
    ) ?>

    <?= $form->field($model, 'medication_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($obat, 'id', 'nama_obat'),
        ['prompt' => 'Select Medication']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
