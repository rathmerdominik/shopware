# CHANGELOG for Shopware 5.6.x

This changelog references changes done in Shopware 5.6 patch versions.

[View all changes from v5.5.2...v5.6.0](https://github.com/shopware/shopware/compare/v5.5.2...v5.6.0)

### Additions

* Added definition signature `getAttributeRawField` to `Shopware\Bundle\ESIndexingBundle\TextMappingInterface` to reduce info request of 
    Elasticsearch and added method implementation to TextMappings
    `Shopware\Bundle\ESIndexingBundle\TextMapping\TextMappingES2::getAttributeRawField`
    `Shopware\Bundle\ESIndexingBundle\TextMapping\TextMappingES5::getAttributeRawField`
    `Shopware\Bundle\ESIndexingBundle\TextMapping\TextMappingES6::getAttributeRawField`

### Changes

* Changed id of login password form in `frontend/account/login.tpl` from `passwort` to `password` 
* Changed the following cart actions to redirect the request to allow customers to press reload:
    `\Shopware_Controllers_Frontend_Checkout::addArticleAction`
    `\Shopware_Controllers_Frontend_Checkout::addAccessoriesAction`
    `\Shopware_Controllers_Frontend_Checkout::deleteArticleAction`
     
### Removals

* Removed `s_articles_attributes`.`articleID` which was not set for new article variants anymore since Shopware 5.2.0

### Deprecations

