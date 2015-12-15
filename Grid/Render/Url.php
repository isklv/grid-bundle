<?php

namespace PedroTeixeira\Bundle\GridBundle\Grid\Render;

/**
 * Render Url
 */
class Url extends RenderAbstract
{
    private $path = 'view/';
    
    /**
     * @return string
     */
    public function render()
    {       
        if ($this->getStringOnly()) {
            return $this->getValue();
        } else {
            return '<a href="' . $this->path . $this->getRow()->getId() . '" >' . $this->getValue() . '</a>';
        }
    }
    
    public function setPath($path)
    {
        $this->path = $path;
    }
}
