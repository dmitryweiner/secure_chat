<?php

namespace app\models;

use \yii\db\ActiveRecord;

class Message extends ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'messages';
    }

}
