<?php
namespace Craft;

class SproutNotesPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Notes');
    }

    public function getVersion()
    {
        return '0.6.0';
    }

    public function getDeveloper()
    {
        return 'Barrel Strength Design';
    }

    public function getDeveloperUrl()
    {
        return 'http://barrelstrengthdesign.com';
    }

    public function hasCpSection()
    {
        return false;
    }
}
