<?php 

namespace core;

class View {
    protected $params;
    protected $path;

    function __construct($params) {
        $this->params = $params;
        $this->path = $this->params['controller'].'/'.$this->params['method'];
    }

    function render($args = []) {
        extract($args);
        $path = 'views/'.$this->path.'.php';
        
        ob_start();
        require $path;
        $content = ob_get_clean();

        require 'views/layouts/index.php';
    }
}