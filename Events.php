<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\mentionedUsers;

use humhub\modules\user\models\User;
use humhub\modules\content\widgets\richtext\RichText;
use Yii;
use yii\base\BaseObject;

class Events extends BaseObject
{
    public static function onContentDelete($event)
    {
        $shares = models\Share::findAll(['content_id' => $event->sender->content->id]);
        foreach ($shares as $share) {
            $share->delete();
        }
    }

    public static function afterContentInsert($event)
    {
        $content = $event->sender->content;
        $contend_id = $event->sender->content->id;

        if ($content->getModel()->wallEntryClass == 'humhub\modules\post\widgets\WallEntry') {
            $post = $content->getPolymorphicRelation();

            //Get Mentioned Users
            $processResult = RichText::postProcess($post->message, $post);
            $mentionedUsers = (isset($processResult['mentioning'])) ? $processResult['mentioning'] : [];

            //Share this content to each users profile
            foreach ($mentionedUsers as $user) {
                models\Share::create($content, User::findOne(['id' => $user->id]));
            }
        }
    }
}
