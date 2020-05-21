<?php

namespace humhub\modules\mentionedUsers\widgets;

use Yii;

/**
 * Shows a Task Wall Entry
 */
class StreamEntry extends \humhub\modules\content\widgets\WallEntry
{

    public $wallEntryLayout = "@mentionedUsers/widgets/views/wallEntry.php";

    public function run()
    {
        return $this->render('streamEntry', ['share' => $this->contentObject]);
    }
}
