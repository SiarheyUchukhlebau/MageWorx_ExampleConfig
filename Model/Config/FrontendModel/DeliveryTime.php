<?php
/**
 * Copyright © MageWorx. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MageWorx\ExampleConfig\Model\Config\FrontendModel;


class DeliveryTime extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * Retrieve element HTML markup
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $renderer = $this->getLayout()->createBlock(
            'MageWorx\ExampleConfig\Block\TimeSlider'
        );
        $renderer->setElement($element);

        return $renderer->toHtml();
    }
}
