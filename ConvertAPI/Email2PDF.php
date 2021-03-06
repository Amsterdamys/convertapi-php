<?php

namespace ConvertAPI;

require_once('Abstract2PDF.php');

 /**
  * Extends the ConvertAPI class to convert email documents into PDF format via
  * convertapi.com.
  *
  * @see http://www.convertapi.com/email-pdf-api
  */
class Email2Pdf extends Abstract2Pdf {

 /**
  * URL of the appropriate convertapi.com API.
  */
	protected $_apiUrl = 'http://do.convertapi.com/Email2Pdf';

 /**
  * An array of valid input file formats for this conversion. Overrides the
  * parent array.
  */
	protected $_validInputFormats = array('eml', 'mbx', 'msg',
	                                      'oft');

}