<?php

namespace barrelstrength\sproutnotes;

use craft\services\Dashboard;
use yii\base\Event;
use craft\base\Plugin;
use craft\events\RegisterComponentTypesEvent;
use barrelstrength\sproutnotes\widgets\Notes as NotesWidget;

class SproutNotes extends Plugin
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Event::on(Dashboard::class, Dashboard::EVENT_REGISTER_WIDGET_TYPES, function(RegisterComponentTypesEvent $event) {
            $event->types[] = NotesWidget::class;
        });
    }
}
