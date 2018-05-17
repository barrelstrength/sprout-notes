<?php

namespace barrelstrength\sproutnotes\widgets;

use barrelstrength\sproutnotes\web\assets\quill\QuillAsset;
use Craft;
use craft\base\Widget;

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
     *
     * @throws \Twig_Error_Loader
     * @throws \yii\base\Exception
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
     * @throws \Twig_Error_Loader
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
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
