<?php

namespace humhub\modules\gamejolt\widgets;

use Yii;
use yii\base\Widget;

/**
 *
 * @author Felli
 */
class GamejoltFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('gamejolt')->getServerUrl() . '/package/v1';
        return $this->render('gamejoltframe', ['gamejoltUrl' => $url]);
    }
}
