<?php

use yii\helpers\Html;
use app\models\Task; // Assuming the Task model namespace is app\models\Task

$this->title = 'Todo App Homepage';

// Query to get count of tasks for each category
$urgentCount = Task::find()->where(['taskCategory' => 'urgent'])->count();
$soonCount = Task::find()->where(['taskCategory' => 'soon'])->count();
$notImportantCount = Task::find()->where(['taskCategory' => 'notImportant'])->count();
?>

<style>
    .site-index {
        padding: 20px;
    }

    .jumbotron {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
    }

    .btn-container {
        margin-bottom: 20px;
    }

    .category-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .category-table th,
    .category-table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .category-table th {
        background-color: #007bff;
        color: #fff;
    }

    .category-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    #DashBoard{
        border-style: groove;
        border-color:skyblue;
        border-radius: 20px;
        /* border-width: 20px; */
        color:blue;
        text-align: center;
        background-color:skyblue;
    }
</style>

<div class="site-index">
    <div class="jumbotron">
        <h1>Welcome to Todo App</h1>

        <p class="lead">Get organized and manage your tasks efficiently!</p>

        <div class="btn-container">
            <?= Html::a('Create Task', ['todo/now'], ['class' => 'btn btn-lg btn-success']) ?>
            <p><strong>Create Task:</strong> Click here to add tasks for the day.</p>
        </div>

        <div class="btn-container">
            <?= Html::a('Current Tasks', ['todo/manage'], ['class' => 'btn btn-lg btn-primary']) ?>
            <p><strong>Manage Tasks:</strong> Click here to view and manage your tasks.</p>
        </div>
        <br>
        <h1 id="DashBoard">Current---- DashBoard</h1>
        <br>
        <table class="category-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Total Count</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Urgent</td>
                    <td><?= $urgentCount ?></td>
                </tr>
                <tr>
                    <td>Soon</td>
                    <td><?= $soonCount ?></td>
                </tr>
                <tr>
                    <td>Not Important</td>
                    <td><?= $notImportantCount ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
