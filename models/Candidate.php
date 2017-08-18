<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidate".
 *
 * @property integer $candidate_id
 * @property string $name
 * @property string $email_id
 * @property integer $mobile_number
 * @property string $location
 * @property integer $experience
 * @property string $resume
 * @property string $skills
 */
class Candidate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidate_id', 'name', 'email_id', 'mobile_number'], 'required'],
            [['candidate_id', 'mobile_number', 'experience'], 'integer'],
            [['name', 'email_id', 'location'], 'string', 'max' => 255],
            [['skills'], 'string', 'max' => 1025],
            [['resume'],'file', 'extensions' => 'doc, docx, rtf, pdf'],
            [['skills','experience','location'],'required','on'=>'request']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'candidate_id' => 'Candidate ID',
            'name' => 'Name',
            'email_id' => 'Email ID',
            'mobile_number' => 'Mobile Number',
            'location' => 'Location',
            'experience' => 'Experience',
            'resume' => 'Resume',
            'skills' => 'Skills',
        ];
    }
}