<?php
namespace Craft;

class SproutNotesPlugin extends BasePlugin
{
	public function getName()
	{
	  return Craft::t('Notes');
	}

	public function getDescription()
	{
	  return 'Add notes to your dashboard.';
	}

	public function getVersion()
	{
	  return '1.0.0';
	}

	public function getDeveloper()
	{
	  return 'Barrel Strength Design';
	}

	public function getDeveloperUrl()
	{
	  return 'http://barrelstrengthdesign.com';
	}

	public function getDocumentationUrl()
	{
	  return 'http://sprout.barrelstrengthdesign.com/craft-plugins/notes/docs';
	}

	public function getReleaseFeedUrl()
	{
	  return 'https://sprout.barrelstrengthdesign.com/craft-plugins/notes/releases.json';
	}

	public function hasCpSection()
	{
	  return false;
	}
}
