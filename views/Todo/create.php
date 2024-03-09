<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Task;
$model = new Task();
$form = ActiveForm::begin([
    'action' => ['todo/create'],
    'options' => ['class' => 'task-form', 'style' => 'margin-top: 20px;'],
]); 
?>

<?= $form->field($model, 'taskName')->textInput(['class' => 'form-control', 'style' => 'width: 100%;']) ?>

<?= $form->field($model, 'taskDescription')->textarea(['class' => 'form-control', 'style' => 'width: 100%; height: 100px;']) ?>

<?= $form->field($model, 'taskCategory')->dropDownList([
    'urgent' => 'Urgent',
    'soon' => 'Soon',
    'notImportant' => 'Not So Important',
], ['class' => 'form-control', 'style' => 'width: 100%;']) ?>

<div class="form-group">
    <?= Html::submitButton('Add Task', ['class' => 'btn btn-primary', 'style' => 'padding: 10px 20px; border-radius: 5px;']) ?>
</div>

<?php ActiveForm::end(); ?>
