<?php
/** Copyright github.com/greezlu */

declare(strict_types = 1);

namespace WebServer\Core;

use WebServer\Exceptions\LocalizedException;
use WebServer\Filesystem\AdminFileManager;

/**
 * @package greezlu/ws-framework
 */
class System
{
    private const FOLDER_STRUCTURE = [
        'app',
        'app/Abstracts',
        'app/Controllers',
        'app/Core',
        'app/Database',
        'app/Exceptions',
        'app/Filesystem',
        'app/Interfaces',
        'app/Result',
        'pub',
        'pub/files',
        'pub/static',
        'pub/static/css',
        'pub/static/css/template',
        'pub/static/css/content',
        'pub/static/css/font',
        'pub/static/fonts',
        'pub/static/images',
        'pub/static/js',
        'view',
        'view/template',
        'view/content',
        'var',
        'var/log',
    ];

    static public function directory(): void
    {
        $fileManager = new AdminFileManager('./');

        foreach (self::FOLDER_STRUCTURE as $folder) {
            if (!$fileManager->isDir($folder)) {
                try {
                    $fileManager->createDir($folder);
                } catch (LocalizedException $error) {}
            }
        }
    }
}
