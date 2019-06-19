<?php

namespace barrelstrength\sproutnotes\widgets;

use barrelstrength\sproutnotes\web\assets\quill\QuillAsset;
use Craft;
use craft\base\Widget;
use Twig_Error_Loader as Twig_Error_LoaderAlias;
use yii\base\Exception;
use yii\base\InvalidConfigException;

/**
 *
 * @property mixed  $bodyHtml
 * @property mixed  $settingsHtml
 * @property string $title
 */
class Notes extends Widget
{
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
    public $options = [];

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('sprout-notes', 'Note');
    }

    /**
     * @inheritdoc
     */
    public static function icon()
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
     *
     * @throws Twig_Error_LoaderAlias
     * @throws Exception
     */
    public function getBodyHtml()
    {
        return Craft::$app->getView()->renderTemplate('sprout-notes/_components/widgets/Notes/notes',
            [
                'widget' => $this
            ]);
    }

    /**
     * @inheritdoc
     *
     * @throws Twig_Error_LoaderAlias
     * @throws Exception
     * @throws InvalidConfigException
     */
    public function getSettingsHtml()
    {
        $this->options = [
            'richText' => Craft::t('sprout-notes', 'Rich Text'),
            'markdown' => Craft::t('sprout-notes', 'Markdown'),
            'html' => Craft::t('sprout-notes', 'HTML')
        ];

        $view = Craft::$app->getView();
        $namespace = $view->getNamespace();
        $view->registerAssetBundle(QuillAsset::class);

        return $view->renderTemplate('sprout-notes/_components/widgets/Notes/settings', [
                'widget' => $this,
                'namespace' => $namespace
            ]
        );
    }
}
