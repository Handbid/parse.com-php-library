<?php
namespace Parse;

class Autoload {

	public static function register($parseDirectory) {
		$loader = new Autoload($parseDirectory);
		spl_autoload_register(array($loader, 'autoload'));
	}

	private $_parseDirectory;

	/**
	 * @param $dir
	 */
	public function __construct($dir) {
		$this->_parseDirectory = $dir . DIRECTORY_SEPARATOR;
	}

	public function aåutoload($className) {
            
            $lastNsPos = strripos($className, '\\');
            
            $class = $this->_parseDirectory . substr($className, $lastNsPos + 1);
                
            $class = ltrim($className, '\\');

            if (!file_exists($class)) {
                return false;
			}
            
			require_once $class;
            
            return true;
	}
}