<?php 
namespace Engine\Helper;

class Common {
    /**
     * Undocumented function
     *
     * @return boolean
     */
    function isPost() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true; 
        } else {
            return false;
        }
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }
/**
 * Undocumented function
 *
 * @return void
 */
    function getPathUrl() {
        $pathUrl = $_SERVER['REQUEST_URI'];
        if($position = strpos($pathUrl, '?')) {
            $pathUrl = substr($pathUrl, '0', $position);
        }
        return $pathUrl;
    }
}

?>