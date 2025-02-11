<?php
/**
 * Этот файл является частью модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Task\Controller;

use Gm\Panel\Http\Response;
use Gm\Panel\Controller\BaseController;

/**
 * Контроллер проверки задач.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Task\Controller
 * @since 1.0
 */
class IndexController extends BaseController
{
    /**
     * Действие "status" проверяет статус пользователя.
     * 
     * @return Response
     */
    public function statusAction(): Response
    {
        /** @var Response $response */
        $response = $this->getResponse();
        // ...
        return $response;
    }
}
