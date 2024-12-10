<?php return array(
    'root' => array(
        'name' => 'pantheon-upstreams/upstream-configuration',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => null,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '5b390889ecbb17bfa69ed5a030fa2e6075a19ba0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(
                0 => '2.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'pantheon-upstreams/upstream-configuration' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => null,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-theme/rebootwp' => array(
            'pretty_version' => '1.2.9',
            'version' => '1.2.9.0',
            'reference' => '1.2.9',
            'type' => 'wordpress-theme',
            'install_path' => __DIR__ . '/../../wp-content/themes/rebootwp',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
