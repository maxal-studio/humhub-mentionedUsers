<?php

namespace humhub\modules\mentionedUsers\assets;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => false
    ];

    public $css = [
        'css/mentionedUsers.css',
    ];

    public $js = [
        'js/mentionedUsers.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];

    /**
     * @inheritdoc
     */
    public $sourcePath = '@mentionedUsers/resources';
}
