<?php
namespace barrelstrength\sproutnotes;

use Craft;
use yii\base\Event;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;

use barrelstrength\sproutnotes\widgets\Notes as NotesWidget;

class SproutNotes extends \craft\base\Plugin
{
		/**
		 * Enable use of SproutNotes::$plugin-> in place of Craft::$app->
		 * 
		 * @var [type]
		 */
		public static $plugin;

    public function init()
    {
        parent::init();

        self::$plugin = $this;

        Event::on(Dashboard::class, Dashboard::EVENT_REGISTER_WIDGET_TYPES, function(RegisterComponentTypesEvent $event) {
            $event->types[] = NotesWidget::class;
        });

        
    }
}
