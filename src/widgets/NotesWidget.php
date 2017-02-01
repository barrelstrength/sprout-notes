<?php
namespace barrelstrength\sproutnotes\widgets;

use Craft;
use craft\base\Widget;
use craft\helpers\Json;
use craft\web\assets\newusers\NewUsersAsset;

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
	public $options = array(
            'markdown' => 'Markdown',
            'html' => 'HTML'
		       );

  /**
   * @inheritdoc
   */
  public static function displayName(): string
  {
    return Craft::t('sproutNotes', 'Sprout Notes');
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
    return parent::getTitle();
  }

	/**
   * @inheritdoc
   */
  public function getBodyHtml()
  {
      return Craft::$app->getView()->renderTemplate('sproutnotes/widgets/Notes/notes',
      [
          'widget' => $this
      ]);
  }

	/**
   * @inheritdoc
   */
  public function getSettingsHtml()
  {
  	return Craft::$app->getView()->renderTemplate('sproutnotes/widgets/Notes/settings',
      [
          'widget' => $this
      ]);
  }
}
