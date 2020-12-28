<?php return array (
  'parameters' => 
  array (
    'AdapterSecurityAdminClass' => 'LegacyTests\\PrestaShopBundle\\Mock\\AdapterSecurityAdminMock',
    'prestashop.security.voter.product.class' => 'LegacyTests\\PrestaShopBundle\\Mock\\PageVoter',
  ),
  'imports' => 
  array (
    0 => 
    array (
      'resource' => 'config_dev.yml',
    ),
  ),
  'framework' => 
  array (
    'test' => NULL,
    'session' => 
    array (
      'storage_id' => 'session.storage.mock_file',
    ),
    'profiler' => 
    array (
      'collect' => false,
    ),
  ),
  'web_profiler' => 
  array (
    'toolbar' => '%use_debug_toolbar%',
    'intercept_redirects' => true,
  ),
  'swiftmailer' => 
  array (
    'disable_delivery' => true,
  ),
  'services' => 
  array (
    'prestashop.bundle.routing.converter.cache' => 
    array (
      'class' => 'Symfony\\Component\\Cache\\Adapter\\ArrayAdapter',
    ),
    'prestashop.adapter.image.uploader.category_cover_image_uploader' => 
    array (
      'class' => 'PrestaShop\\PrestaShop\\Adapter\\Image\\Uploader\\CategoryCoverImageUploader',
    ),
  ),
  'doctrine' => 
  array (
    'dbal' => 
    array (
      'connections' => 
      array (
        'default' => 
        array (
          'dbname' => 'test_%database_name%',
        ),
      ),
    ),
  ),
);
