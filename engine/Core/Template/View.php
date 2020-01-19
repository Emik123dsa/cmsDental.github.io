<?php 
namespace Engine\Core\Template;

use Engine\Core\Template\Theme;
class View {
    protected $theme;
public function __construct() 
{
    $this->theme = new Theme();
}
/**
 * Undocumented function
 *
 * @param [type] $template
 * @param array $vars
 * @return void
 */
public function render($template, $vars=[]) {
    
    $templatePath = $this->getTemplatePath($template, ENV);
    
    if(!is_file($templatePath)) {

        throw new \InvalidArgumentException(sprintf('Is not valid!', $template, $templatePath));
    }
    $this->theme->setData($vars);
    extract($vars);

    ob_start();
    ob_implicit_flush(0);

    try {
        require $templatePath;
    } catch (\Exception $e) {
        ob_end_clean();
        throw $e;
    }

    echo ob_get_clean();
}

private function getTemplatePath($template, $env = null) {
    if($env == 'Cms') {
        return ROOT_DIR. '/content/themes/default/' .$template.'.php';
    } else {
        return ROOT_DIR. '/View/'.$template.'.php';

    }
    
}
}
?>