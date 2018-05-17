<?php

namespace barrelstrength\sproutnotes;

use barrelstrength\sproutnotes\widgets\Notes as NotesWidget;
use craft\services\Dashboard;
use craft\base\Plugin;
use craft\events\RegisterComponentTypesEvent;
use Craft;
use yii\base\Event;

class SproutNotes extends Plugin
{
    /**
     * @var string
     */
    public $schemaVersion = '2.0.0';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        /** @noinspection CascadingDirnameCallsInspection */
        Craft::setAlias('@sproutnoteslib', dirname(__DIR__, 2).'/sprout-notes/lib');

        Event::on(Dashboard::class, Dashboard::EVENT_REGISTER_WIDGET_TYPES, function(RegisterComponentTypesEvent $event) {
            $event->types[] = NotesWidget::class;
        });
    }
}
