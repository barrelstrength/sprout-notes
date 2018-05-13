<?php
/**
 * @link      https://sprout.barrelstrengthdesign.com/
 * @copyright Copyright (c) Barrel Strength Design LLC
 * @license   http://sprout.barrelstrengthdesign.com/license
 */

namespace barrelstrength\sproutnotes\web\assets\quill;

use craft\web\AssetBundle;

class QuillAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = '@sproutnoteslib/quill';

        $this->js = [
            'quill.min.js',
        ];

        $this->css = [
            'quill.snow.css',
        ];

        parent::init();
    }
}