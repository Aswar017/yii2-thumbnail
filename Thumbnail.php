<?php

namespace aswar\bs;

use \yii\bootstrap\Widget;

class Thumbnail extends Widget
{
    /**
     * @var string $title
     */
    public $title = 'yii2-thumbnail';

    /**
     * @var string $description
     */
    public $description = 'widget thumbnail boostrap for framework yii 2';

    /**
     * @var array $imgOptions
     */
    public $imgSource = 'http://placehold.it/240x200';

    /**
     * @var string $template
     */
    public $template = <<<HTML
    <div class="thumbnail">
        <img src="{imgSource}">
        <div class="caption">
            <h3>{yii2-thumbnail}</h3>
            <p>{widget thumbnail boostrap for framework yii 2}</p>
        </div>
    </div>
    HTML;



    public function init()
    {
        parent::init();
        echo strtr(
            $this->template,
            [
                '{imgSource}' => $this->imgSource,
                '{title}' => $this->title,
                '{description}' => $this->description,
            ]
        );        
    }
}

