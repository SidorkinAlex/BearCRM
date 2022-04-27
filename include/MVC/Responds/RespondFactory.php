<?php


namespace SuiteCRM\MVC\Responds;

require_once 'include/MVC/Responds/AbstractRespond.php';
require_once 'include/MVC/Responds/HTMLRespond.php';
require_once 'include/MVC/Responds/RespondInterface.php';
require_once 'include/MVC/Responds/JSONRespond.php';
require_once 'include/MVC/Responds/RedirectRespond.php';

class RespondFactory
{
    public static function createRespond(string $type, $content, int $code = 200)
    {
        switch ($type) {
            case 'json':
                $respond = new JSONRespond($content, $code);
            break;
            case 'html':
                $respond = new HTMLRespond($content, $code);
                break;
            case 'redirect':
                $respond = new RedirectRespond($content);
                break;
            default:
                $respond = new HTMLRespond('', 500);
                break;
        }
        \SugarApplication::addRespond($respond);
    }

}