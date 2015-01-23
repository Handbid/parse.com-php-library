<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Parse;

/**
 * Description of ParseLibraryException
 *
 * @author woody
 */
class ParseLibraryException
{
	public function __construct($message, $code = 0, Exception $previous = null) {
		//codes are only set by a parse.com error
		if($code != 0){
			$message = "parse.com error: ".$message;
		}

		parent::__construct($message, $code, $previous);
	}

	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}
}
