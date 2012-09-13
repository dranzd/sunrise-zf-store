<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Sunrise\Controller\Cart'  => 'Sunrise\Controller\CartController',
            'Sunrise\Controller\Store' => 'Sunrise\Controller\StoreController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'sunrise' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/store',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Sunrise\Controller',
                        'controller'    => 'Store',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:controller[/:action[/:id[/]]]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '[0-9]*',
                            ),
                            'defaults' => array(),
                        ),
                    ),
                    'query' => array(
                        'type' => 'Query',
                    )
                ),
            ),
            'cart' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/cart[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Sunrise\Controller',
                        'controller' => 'Cart',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);
