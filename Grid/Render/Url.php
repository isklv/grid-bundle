<?php

namespace PedroTeixeira\Bundle\GridBundle\Grid\Render;

/**
 * Render Url
 */
class Url extends RenderAbstract
{
    /**
     * @return string
     */
    public function render()
    {       
        if ($this->getStringOnly()) {
            return $this->getValue();
        } else {
            return '<a href="view/' . $this->getRow()->getId() . '" >' . $this->getValue() . '</a>';
        }
    }
}
