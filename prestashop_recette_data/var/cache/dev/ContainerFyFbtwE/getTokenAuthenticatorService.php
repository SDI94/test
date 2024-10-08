<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Core\Security\TokenAuthenticator' shared service.

return $this->privates['PrestaShop\\PrestaShop\\Core\\Security\\TokenAuthenticator'] = new \PrestaShop\PrestaShop\Core\Security\TokenAuthenticator(new \PrestaShopBundle\Security\OAuth2\ResourceServer(new \League\OAuth2\Server\ResourceServer(($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \League\OAuth2\Server\CryptKey('-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3AlD3vum3nXbLFnf76x5'."\n".'iUzK63IAq/oNC1k9g2k1opZY4zgibuevowh5hjC/ydw2SbXky+r8kGdOUIO/FVzR'."\n".'ja+HAxXbHfEHAP6YXV9jV4//RpmUx+Q4NkLRkbuAsYgSHzGmQAKi8UCe4fpszxxg'."\n".'/ovAPY6zGmomzPNI+Y0XLNluR0hAgM8xW0PIC/pd0yFLR/oBKhZlWL41jjRxnz7L'."\n".'70fJbYBq5VTrGPf1XpUOp097goOmqCg/efTdTA/yTnqR2lHf3RlBkwSBmjJ5mJrF'."\n".'0DXtwwFCZYKhr2xAGXPpkrYOfGD+K5b1OSRuLQzN0pgpbOn6SxexITqpEa7fO5F7'."\n".'jQIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'')), ($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([])))), ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')));
