<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\core\content\widgets;

use Yii;

/**
 * StickLink for Wall Entries
 *
 * This widget will attached to the WallEntryControlsWidget and displays
 * the "Stick or Unstick" Link to the Content Objects.
 *
 * @since 0.5
 */
class ArchiveLink extends \yii\base\Widget
{

    /**
     * @var \humhub\core\content\components\activerecords\Content
     */
    public $content;

    /**
     * Executes the widget.
     */
    public function run()
    {
        if (!Yii::$app->controller instanceof ContentContainerController || !$this->content->content->canArchive()) {
            return;
        }

        return $this->render('archiveLink', array(
                    'object' => $this->content,
                    'model' => $this->content->content->object_model,
                    'id' => $this->content->content->object_id,
        ));
    }

}

?>