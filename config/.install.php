<?php
/**
 * Этот файл является частью виджета веб-приложения RosGear.
 * 
 * Файл конфигурации установки виджета.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'use'         => FRONTEND,
    'id'          => 'rg.wd.article',
    'category'    => 'article',
    'name'        => 'Article',
    'description' => 'Site article',
    'namespace'   => 'Rg\Widget\Article',
    'path'        => '/rg/rg.wd.article',
    'locales'     => ['ru_RU', 'en_GB'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG CMS']
    ]
];
