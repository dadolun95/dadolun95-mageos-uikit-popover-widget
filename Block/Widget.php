<?php
declare(strict_types=1);

namespace Dadolun\MarkersWidget\Block;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Cms\Model\Block as CmsBlock;
use Magento\Widget\Block\BlockInterface;

class Widget extends \Magento\Framework\View\Element\Template implements BlockInterface
{
    protected $_template = "Dadolun_MarkersWidget::widget.phtml";
}
