<?php
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

/** @var \common\models\UserAddress $userAddress */
/** @var \yii\web\View $this */


?>

<?php if (isset($success) && $success = true) ?>

    <div class="alert alert-success">
    Your address was successfully updated.
    </div>
    

<?php $addressForm = ActiveForm::begin([
    'action' => ['/profile/update_address'],
    'options' => [
        'data-pjax' => 1
    ]
]); ?>
<?= $addressForm->field($userAddress, 'address') ?>
<?= $addressForm->field($userAddress, 'city') ?>
<?= $addressForm->field($userAddress, 'state') ?>
<?= $addressForm->field($userAddress, 'country') ?>
<?= $addressForm->field($userAddress, 'zipcode') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>

