<?php

namespace app\controllers;
use app\models\Task;
use yii\web\Controller;
use yii\web\Response;
use yii\helpers\Url;
use Yii;
use yii\web\NotFoundHttpException;

class TodoController extends Controller
{
   public function actionNow()
   {
    return $this->render('create');
   }
   public function actionCreate()
    {
        $model = new Task();

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        Yii::$app->session->setFlash('success', 'Task added successfully.');
        return $this->redirect(['create']); // Redirect to the create page
    } else {
       // Yii::$app->session->setFlash('error', 'Failed to add task.');
        Yii::error('Failed to save task: ' . print_r($model->errors, true));
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    }
    public function actionTest()
    {
        $model=Task::find()->all();
        $data= new Task;
        $data->taskName="study";
        $data->taskDescription="I have to complete this project";
        $data->taskCategory='Urgent';
        $data->save();
        echo "<br>".print_r($model);

    }
    public function actionManage()
{
    $tasks = Task::find()->all();

    return $this->render('manage', [
        'tasks' => $tasks,
    ]);
}
public function actionDelete($name)
{
    $model = Task::findOne(['taskName' => $name]);
    if ($model === null) {
        throw new NotFoundHttpException('The requested page does not exist.');
    }

    $model->delete();

    return $this->redirect(['manage']); // Redirect back to the manage page
}
public function actionIndex()
{
    return $this->render('homepage');
}

}

