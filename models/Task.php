<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list".
 *
 * @property string $taskName
 * @property string|null $taskDescription
 * @property string $taskCategory
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taskName', 'taskCategory'], 'required'],
            [['taskName', 'taskCategory'], 'string'],
            [['taskDescription'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'taskName' => 'Task Name',
            'taskDescription' => 'Task Description',
            'taskCategory' => 'Task Category',
        ];
    }
    public static function primaryKey()
    {
        return ['taskName'];
    }
}
