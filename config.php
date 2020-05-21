<?php

//use humhub\modules\content\widgets\WallEntryControls;

use humhub\components\ActiveRecord;
use humhub\modules\content\components\ContentActiveRecord;
use humhub\modules\content\widgets\WallEntryLinks;

return [
    'id' => 'mentionedUsers',
    'class' => 'humhub\modules\mentionedUsers\Module',
    'namespace' => 'humhub\modules\mentionedUsers',
    'events' => [
        [
            'class' => ActiveRecord::className(),
            'event' => ActiveRecord::EVENT_BEFORE_DELETE,
            'callback' => [
                'humhub\modules\mentionedUsers\Events', 'onContentDelete'
            ]
        ],
        [
            'class' => ContentActiveRecord::className(),
            'event' => ContentActiveRecord::EVENT_AFTER_INSERT,
            'callback' => [
                'humhub\modules\mentionedUsers\Events', 'afterContentInsert'
            ]
        ]
    ],
];
