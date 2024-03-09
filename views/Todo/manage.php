<?php
use yii\helpers\Html;

$this->title = 'Manage Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<table class="table">
    <thead>
        <tr>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>Task Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= Html::encode($task->taskName) ?></td>
                <td><?= Html::encode($task->taskDescription) ?></td>
                <td><?= Html::encode($task->taskCategory) ?></td>
                <td>
                    <?= Html::beginForm(['delete', 'name' => $task->taskName], 'post') ?>
                        <?= Html::submitButton('completed', ['class' => 'btn btn-danger']) ?>
                    <?= Html::endForm() ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
