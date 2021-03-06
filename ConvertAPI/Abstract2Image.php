<?php

namespace ConvertAPI;

require_once('ConvertAPI.php');

 /**
  * Extends the ConvertAPI class to convert various documents into image format
  * via convertapi.com.
  */
abstract class Abstract2Image extends ConvertAPI {

 /* Magic methods. */

 /**
  * Magic setter method. Checks and sets values for $_additionalParameters.
  *
  * @param string $name Name of the additional parameter to set.
  * @param string $value Value to set the parameter to.
  */
	public function __set($name, $value) {

		switch ($name) {
			case 'DocumentTitle': case 'DocumentSubject':
			case 'DocumentAuthor': case 'DocumentKeywords':
				if (is_string($value)) {
					$this->_additionalParameters[$name] = $value;
				} else {
					throw new \Exception($name.' must be a string.');
				}
			break;
			case 'OutputFormat':
				if (is_string($value) && in_array($value, array('png', 'jpg', 'tif'))) {
					$this->_additionalParameters[$name] = $value;
				} else {
					throw new \Exception($name.' must be "png", "jpg" or "tif".');
				}
			break;
			case 'AlternativeParser': case 'StoreFile':
				if (is_bool($value)) {
					$this->_additionalParameters[$name] = $value;
				} else {
					throw new \Exception($name.' must be a boolean value.');
				}
			break;
			case 'Timeout':
				if (is_int($value) && $value >= 5 && $value <= 600) {
					$this->_additionalParameters[$name] = $value;
				} else {
					throw new \Exception($name.' must be an integer between 5 and 600.');
				}
			break;
		}

	}

}