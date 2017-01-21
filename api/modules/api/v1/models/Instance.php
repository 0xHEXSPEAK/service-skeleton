<?php

namespace api\modules\api\v1\models;

use yii\db\ActiveRecord;

class Instance extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instance';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [
                [
                    'instanceId',
                    'image',
                    'command',
                    'created',
                    'state',
                    'status',
                    'ports',
                    'networks'
                ],
                'required'
            ],
        ];
    }
}
