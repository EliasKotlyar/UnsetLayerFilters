# UnsetLayerFilters
UnsetLayerFilters - solves a Magento-Error when trying to remove Layer Filters

This Extension solves following Magento-Error:

Fatal error: Call to a member function getItemsCount() in ...app/code/core/Mage/Catalog/Block/Layer/View.php on line 218

as you are trying to remove the Layer Filters with the Layout-XML like this:
<reference name="catalog.leftnav">
    <action method="unsetChild">
        <alias>price_filter</alias>
    </action>
</reference>
