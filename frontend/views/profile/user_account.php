<?php
/** @var \common\models\User $user   */
/** @var \yii\web\View $this */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
?>
<?php if (isset($success) && $success = true) ?>

    <div class="alert alert-success">
        Your account was successfully updated.
    </div>

 <?php $form = ActiveForm::begin([
         'action' => ['/profile/update-account'],
         'options' => [
                 'data-pjax' => 1 ]
         ]); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($user, 'firstname')->textInput(['autofocus' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($user, 'lastname')->textInput(['autofocus' => true]) ?>
                        </div>
                    </div>

                    <?= $form->field($user, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($user, 'email') ?>

                    <div class="row">
                        <div class="col">
                            <?= $form->field($user, 'password')->passwordInput() ?>
                        </div>
                        <div class="col">
                            <?= $form->field($user, 'passwordConfirm')->passwordInput() ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
