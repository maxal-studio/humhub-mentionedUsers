<?php

use yii\helpers\Html;
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;
use humhub\modules\content\components\ContentContainerController;
use humhub\modules\content\widgets\WallEntry;
use humhub\modules\content\widgets\WallEntryControls;

//$user = $object->content->user;
$container = $object->content->container;
$sharedContent = $object->sharedContent->getPolymorphicRelation();
$taggedUser = $object->content->container;
?>

<div class="panel panel-default wall_mentioned_content wall_<?php echo $object->getUniqueId(); ?>">
    <div class="panel-body">
        <div class="media">
            <?php echo \humhub\modules\content\widgets\WallEntryControls::widget(['object' => $object, 'wallEntryWidget' => $wallEntryWidget]); ?>

            <p>
                <?= Yii::t('MentionedUsersModule.base', '{displayName} is tagged in this post.', ['displayName' => Html::a($taggedUser->displayName, $taggedUser->getUrl(), ['style' => 'color: #e5c150']), 'contentType' => Html::a($sharedContent->getContentName(), $sharedContent->content->getUrl())]); ?>
            </p>

            <div class="content wall-content" id="wall_content_<?php echo $object->getUniqueId(); ?>">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</div>