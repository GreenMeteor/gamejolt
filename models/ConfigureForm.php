<?php

namespace humhub\modules\gamejolt\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('GamejoltModule.base', 'Gamejolt Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('GamejoltModule.base', 'e.g. https://widgets.gamejolt.com//package/v1?key={package-id}'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('gamejolt')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('gamejolt')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
