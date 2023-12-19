<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "raspisanie".
 *
 * @property int $id
 * @property string|null $subject_name
 * @property string|null $day
 * @property string|null $time
 * @property int $teacher_id
 *
 * @property Teachers $teacher
 */
class Raspisanie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'raspisanie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id'], 'required'],
            [['teacher_id'], 'integer'],
            [['subject_name', 'day', 'time'], 'string', 'max' => 55],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::class, 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_name' => 'Предмет',
            'day' => 'День недели',
            'time' => 'Время',
            'teacher_id' => 'ID учителя',
        ];
    }

    /**
     * Gets query for [[Teacher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teachers::class, ['id' => 'teacher_id']);
    }
}
