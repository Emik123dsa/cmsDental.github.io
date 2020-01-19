<?php 
namespace Engine\Core\Template;

class Theme {
    
    const NULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'sidebar' => 'sidebar-%s'
    ];

    public $url = '';
    protected $data = [];

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data=$data;
    }
/**
 * Undocumented function
 *
 * @param [type] $name
 * @return void
 */
    public function header($name = null) {
        $name = (string) $name;
        $file = 'header';
        if($name !== '') {
            $file = sprintf(self::NULES_NAME_FILE['header'], $name);
        } 
        $this->loadTemplateFile($file);
    }
/**
 * Undocumented function
 *
 * @param [type] $name
 * @return void
 */
    public function footer($name = null) {
        $name = (string) $name;
        $file = 'footer';
        if($name !== '') {
            $file = sprintf(self::NULES_NAME_FILE['footer'], $name);
        } 
        $this->loadTemplateFile($file);
    }
/**
 * Undocumented function
 *
 * @param [type] $name
 * @return void
 */
    public function sidebar($name = null) {
        $name = (string) $name;
        $file = 'sidebar';
        if($name !== '') {
            $file = sprintf(self::NULES_NAME_FILE['sidebar'], $name);
        } 
        $this->loadTemplateFile($file);

    }
/**
 * Undocumented function
 *
 * @param string $name
 * @param array $data
 * @return void
 */
    public function block($name = '', $data = []) {
        $name = (string) $name;
        if($name !== '') {
            $this->loadTemplateFile($name, $data);
        } 
    } 
/**
 * Undocumented function
 *
 * @param [type] $nameFile
 * @param array $data
 * @return void
 */
    private function loadTemplateFile($nameFile, $data = []) {
        $templateFile = ROOT_DIR. '/content/themes/default/' . $nameFile. '.php';

        if (ENV == 'Admin') {
            $templateFile = ROOT_DIR. '/View/' . $nameFile . '.php';
        }

        if (is_file($templateFile)) {
            extract($data);
            require_once $templateFile;
        }
        else {
            throw new \Exception(sprintf('View file is not being available now!', $templateFile));
        }

    }
    
}
?>