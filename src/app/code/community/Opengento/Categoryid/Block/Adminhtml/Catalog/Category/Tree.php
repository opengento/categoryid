<?php
/**
 * This file is part of Opengento_Categoryid for Magento.
 *
 * @license MIT
 * @author Adrien Louis-Rossignol
 * @category Opengento
 * @package Opengento_Categoryid
 * @copyright Copyright (c) 2017 Opengento (https://www.opengento.fr/)
 */

/**
 * Adminhtml_Catalog_Category_Tree Block
 * @package Opengento_Categoryid
 */
class Opengento_Categoryid_Block_Adminhtml_Catalog_Category_Tree extends Mage_Adminhtml_Block_Catalog_Category_Tree
{
    /**
     * Add the category ID inside the category tree
     *
     * @param $node
     * @return string
     */
    public function buildNodeName($node)
    {
        $label = parent::buildNodeName($node);
        if (Mage::helper('opengento_categoryid')->isEnabled()) {
            $label .= ' [ID : '.$node->getId().']';
        }

        return $label;
    }
}
