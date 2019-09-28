<?php

namespace App\Components;

class ViewConfig extends \denis909\view\Config
{

    public function __construct()
    {
        if (!$this->templatesPath)
        {
            $this->templatesPath = dirname(dirname(__DIR__)) . '/templates';
        }

        parent::__construct();
    }

}