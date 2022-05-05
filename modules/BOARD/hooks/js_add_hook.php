<?php

use SuiteCRM\MVC\RouteParser\RouteParser;

require_once 'modules/BOARD/BOARD_CONFIG.php';

class Js_Add_Hook
{
    function after_ui_frame_method($event, $arguments)
    {
        if ($arguments['routeParser'] && $arguments['routeParser'] instanceof RouteParser) {

            $board_Config = new \SuiteCRM\Modules\BOARD\BOARD_CONFIG();
            if (!empty($arguments['routeParser']->getModule())
                && in_array($arguments['routeParser']->getModule(), $board_Config->getModulesList())
                && in_array($arguments['routeParser']->getAction(), $board_Config->getActionFromAddJsMenu())
                && empty(
                $arguments['routeParser']->getRequest()->get('to_pdf')
                )
            ) {
                echo '<script src="/modules/BOARD/src/js/js_menu_add.js"></script>';
            }
        }
    }
}