<?php

namespace PedroTeixeira\Bundle\GridBundle\Grid\Render;

use Symfony\Component\Locale\Stub\DateFormat\FullTransformer;

/**
 * Render Date
 */
class Date extends RenderAbstract
{
    private $format;
    
    private $locale;
    
    /**
     * @return string
     */
    public function render()
    {
        if ($this->getValue() instanceof \DateTime) {

            $transformer = new FullTransformer(
                ($this->format ? $this->format : $this->container->getParameter('pedro_teixeira_grid.date.date_format')),
                ($this->locale ? $this->locale : $this->container->getParameter('locale'))
            );

            return $transformer->format($this->getValue());
        }
    }
    
    public function setFormat($format, $locale = null)
    {
        if($format)
            $this->format = $format;
        if($locale)
            $this->locale = $locale;
    }
}
