<?php

/**
 * @package controller
 * @classe home
 *
 */

load_lib_file( 'webdefault/util/sessionlogin' );

class Home extends BaseController
{
	function __construct( $context )
	{
		parent::__construct( $context );
	}
	
	function index( $args )
	{
		$this->viewVars["json"] = array( "version" => $GLOBALS['version'], 'app' => CMSConfig::APP_NAME );
		$this->loadView( 'JSON', $this->viewVars );
	}
}

?>
