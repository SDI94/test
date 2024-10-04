<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.tax.tax_options_configuration' shared service.

return $this->services['prestashop.core.tax.tax_options_configuration'] = new \PrestaShop\PrestaShop\Core\Tax\TaxOptionsConfiguration(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->load('getMultistoreFeatureService.php')), ($this->services['prestashop.adapter.tax.ecotax.ecotax_resetter'] ?? ($this->services['prestashop.adapter.tax.ecotax.ecotax_resetter'] = new \PrestaShop\PrestaShop\Adapter\Tax\Ecotax\ProductEcotaxResetter())));
