<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "{{%mailinglist}}".
 *
 * @property int $id
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Mailinglist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%mailinglist}}';
    }


    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'status'], 'required'],
            [['status', 'created_at'], 'integer'],
            [['email'], 'string', 'max' => 120],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'status' => 'Active',
            'created_at' => 'Created At',
            'Updated at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\MailinglistQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\MailinglistQuery(get_called_class());
    }
}
