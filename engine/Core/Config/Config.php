<?php
namespace Engine\Core\Config;

use Exception;

class Config {
    public static function item($key, $group = 'main') {
        $groupItems = static::file($group);
        return isset($groupItems[$key]) ? $groupItems[$key] : null; 

    }
/**
 * Undocumented function
 *
 * @param [type] $group
 * @return void
 */
    public static function file($group) {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/dynweb/cms/' . mb_strtolower(ENV). '/Config/'.$group.'.php';
        if(file_exists($path)) {

            $items = require_once $path;

            if(!empty($items)) {
                return $items;
            } else {
                throw new \Exception(sprintf('File %s is not being an array ', $path));
            }

        } else {
            throw new \Exception(sprintf('Can"t receive this is file from <strong>%s</strong> library', $path));
           
        }

        return false;

    }
}


?>