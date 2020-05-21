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
<div class="panel panel-default wall_<?php echo $object->getUniqueId(); ?>">
    <div class="panel-body">
        <div class="media">
            <ul class="nav nav-pills preferences">
                <li class="dropdown languageDropDown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-label="<?= Yii::t('base', 'Toggle stream entry menu'); ?>" aria-haspopup="true">
                        <!-- Translate Icon -->
                    </a>

                    <ul class="dropdown-menu pull-right">
                        <li> <a onclick="translatePost(event)" data-value="af" href='#'>Afrikaans </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ar" href='#'>Arabic </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="bg" href='#'>Bulgarian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="bn" href='#'>Bangla </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="bs" href='#'>Bosnian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ca" href='#'>Catalan </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="cs" href='#'>Czech </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="cy" href='#'>Welsh </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="da" href='#'>Danish </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="de" href='#'>German </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="el" href='#'>Greek </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="en" href='#'>English </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="es" href='#'>Spanish </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="et" href='#'>Estonian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="fa" href='#'>Persian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="fi" href='#'>Finnish </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="fil" href='#'>Filipino </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="fj" href='#'>Fijian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="fr" href='#'>French </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="he" href='#'>Hebrew </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="hi" href='#'>Hindi </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="hr" href='#'>Croatian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ht" href='#'>Haitian Creole </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="hu" href='#'>Hungarian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="id" href='#'>Indonesian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="is" href='#'>Icelandic </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="it" href='#'>Italian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ja" href='#'>Japanese </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ko" href='#'>Korean </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="lt" href='#'>Lithuanian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="lv" href='#'>Latvian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="mg" href='#'>Malagasy </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ms" href='#'>Malay </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="mt" href='#'>Maltese </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="mww" href='#'>Hmong Daw </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="nb" href='#'>Norwegian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="nl" href='#'>Dutch </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="otq" href='#'>Queretaro Otomi </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="pl" href='#'>Polish </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="pt" href='#'>Portuguese </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ro" href='#'>Romanian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ru" href='#'>Russian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="sk" href='#'>Slovak </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="sl" href='#'>Slovenian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="sm" href='#'>Samoan </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="sr-Cyrl" href='#'>Serbian (Cyrillic) </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="sr-Latn" href='#'>Serbian (Latin) </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="sv" href='#'>Swedish </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="sw" href='#'>Kiswahili </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ta" href='#'>Tamil </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="te" href='#'>Telugu </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="th" href='#'>Thai </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="tlh" href='#'>Klingon </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="to" href='#'>Tongan </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="tr" href='#'>Turkish </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ty" href='#'>Tahitian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="uk" href='#'>Ukrainian </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="ur" href='#'>Urdu </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="vi" href='#'>Vietnamese </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="yua" href='#'>Yucatec Maya </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="yue" href='#'>Cantonese </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="zh-Hans" href='#'>Chinese Simplified </a> </li>
                        <li> <a onclick="translatePost(event)" data-value="zh-Hant" href='#'>Chinese Traditional </a> </li>
                    </ul>
                </li>

                <li class="dropdown optionsDropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <?php echo \humhub\modules\content\widgets\WallEntryControls::widget(['object' => $object, 'wallEntryWidget' => $wallEntryWidget]); ?>
                    </ul>
                </li>
            </ul>

            <p>
                <?= Yii::t('MentionedUsersModule.base', '{displayName} is tagged in this post.', ['displayName' => Html::a($taggedUser->displayName, $taggedUser->getUrl(), ['style' => 'color: #e5c150']), 'contentType' => Html::a($sharedContent->getContentName(), $sharedContent->content->getUrl())]); ?>
            </p>

            <div class="content wall-content" id="wall_content_<?php echo $object->getUniqueId(); ?>">
                <?php echo $content; ?>
            </div>

        </div>
    </div>

</div>