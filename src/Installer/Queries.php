<?php
/**
 * Этот файл является частью модуля веб-приложения GearMagic.
 * 
 * Файл конфигурации Карты SQL-запросов.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'drop'   => ['{{panel_message}}', '{{panel_message_type}}'],
    'create' => [
        '{{panel_message}}' => function () {
            return "CREATE TABLE `{{panel_message}}` (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                `user_id` int(11) unsigned DEFAULT NULL,
                `type_id` int(11) unsigned DEFAULT NULL,
                `text` text,
                `date` datetime DEFAULT NULL,
                `read` int(1) unsigned DEFAULT '0',
                PRIMARY KEY (`id`)
            ) ENGINE={engine} 
            DEFAULT CHARSET={charset} COLLATE {collate}";
        },

        '{{panel_message_type}}' => function () {
            return "CREATE TABLE `{{panel_message_type}}` (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                `index` int(11) unsigned DEFAULT '1',
                `name` varchar(255) DEFAULT NULL,
                `description` text,
                `element` varchar(255) DEFAULT NULL,
                `icon` varchar(255) DEFAULT NULL,
                `options` text,
                PRIMARY KEY (`id`)
            ) ENGINE={engine} 
            DEFAULT CHARSET={charset} COLLATE {collate}";
        }
    ],

    'run' => [
        'install'   => ['drop', 'create'],
        'uninstall' => ['drop']
    ]
];