<?php
namespace Craft;

class SproutNotes_NotesWidget extends BaseWidget
{
    /**
    *  Prepare our formatting setting defaults
    */
    private $options = array(
        'output' => array(
            'markdown' => 'Markdown',
            'html' => 'HTML'
        )
    );

    /**
     * Returns the type of widget this is.
     *
     * @return string
     */
    public function getName()
    {
        return Craft::t('Note');
    }

    /**
     * Gets the widget's title.
     *
     * @return string
     */
    public function getTitle()
    {   
        // Our User can set this in the Widget Settings
        return Craft::t($this->getSettings()->heading);
    }


    /**
     * Gets the widget's body HTML.
     *
     * @return string
     */
    public function getBodyHtml()
    {   
        return craft()->templates->render('sproutnotes/_widgets/notes', array(
            'settings' => $this->getSettings()
        ));
    }

    /**
     * Define our settings and their defaults
     * 
     * @return array
     */
    protected function defineSettings()
    {
        return array(
            'heading' => array(AttributeType::String, 'required' => true, 'default' => 'Notes'),
            'notes' => array(AttributeType::Mixed, 'required' => true),
            'output' => array(AttributeType::String, 'required' => true, 'default' => 'markdown')
        );
    }

    /**
     * Display our settings
     * 
     * @return mixed
     */
    public function getSettingsHtml()
    {   
        return craft()->templates->render('sproutnotes/_settings', array(
            'options' => $this->options,
            'settings' => $this->getSettings()
        ));
    }
}
