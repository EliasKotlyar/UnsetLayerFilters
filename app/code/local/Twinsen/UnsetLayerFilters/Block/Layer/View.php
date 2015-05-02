<?php

/**
 * Class Mage_Catalog_Block_Layer_View
 */
class Twinsen_UnsetLayerFilters_Block_Layer_View extends Mage_Catalog_Block_Layer_View
{
    /**
     * Get all layer filters
     *
     * @return array
     */
    public function getFilters()
    {
        $filters = array();
        if ($categoryFilter = $this->_getCategoryFilter()) {
            $filters[] = $categoryFilter;
        }

        $filterableAttributes = $this->_getFilterableAttributes();
        foreach ($filterableAttributes as $attribute) {
            $filter = $this->getChild($attribute->getAttributeCode() . '_filter');
            if (is_object($filter)) {
                $filters[] = $filter;
            }
        }

        return $filters;
    }
}