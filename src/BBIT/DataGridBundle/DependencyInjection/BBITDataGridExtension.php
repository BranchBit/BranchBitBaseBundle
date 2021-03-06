<?php

namespace BBIT\DataGridBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class BBITDataGridExtension extends Extension
{
    public function prepend(ContainerBuilder $container)
    {

        $config = [
            'template' => [
                'pagination' => 'KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig',
            ]
        ];

        $container->prependExtensionConfig('knp_paginator', $config);

    }

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $this->prepend($container);


    }
}
