<?php

namespace barrelstrength\sproutnotes\widgets;

use Craft;
use craft\base\Widget;

class Notes extends Widget
{
	// Properties
	// =========================================================================

	/**
	 * @var string
	 */
	public $heading;

	/**
	 * @var string
	 */
	public $notes;

	/**
	 * @var string
	 */
	public $output;

	/**
	 * @var array
	 */
	public $options = [
		'markdown' => 'Markdown',
		'html' => 'HTML',
	];

	/**
	 * @inheritdoc
	 */
	public static function displayName(): string
	{
		return Craft::t('sproutnotes', 'Sprout Notes');
	}

	/**
	 * @inheritdoc
	 */
	public static function iconPath()
	{
		return Craft::getAlias('@barrelstrength/sproutnotes/icon-mask.svg');
	}

	/**
	 * @inheritdoc
	 */
	public function getTitle(): string
	{
		return $this->heading;
	}

	/**
	 * @inheritdoc
	 */
	public function getBodyHtml()
	{
		return Craft::$app->getView()->renderTemplate('sproutnotes/widgets/notes/notes',
			[
				'widget' => $this
			]);
	}

	/**
	 * @inheritdoc
	 */
	public function getSettingsHtml()
	{
		return Craft::$app->getView()->renderTemplate('sproutnotes/widgets/notes/settings',
			[
				'widget' => $this
			]);
	}
}
