<?php

/**
 * @classe Classe de configuração
 *
 */
class Config
{
	const LANGUAGE = 'pt_BR';
	## PDO CONFIG
	const DATABASE_TYPE = 'mysql';
	const DATABASE_HOST = '127.0.0.1'; // Default: localhost
	const DATABASE_PORT = '3306'; // Default: 3306
	const DATABASE_USER = 'root';
	const DATABASE_PASS = '';
	const DATABASE_NAME = 'upcms-template';
	
	const DATABASE_SSL		= false;
	const DATABASE_SSL_CA	= NULL;//"mysql-ca.pem";
	const DATABASE_SSL_KEY	= NULL;//"mysql-client-key.pem";
	const DATABASE_SSL_CERT	= NULL;//"mysql-client-cert.pem";
	
	const SYSTEM_TABLE_PREFIX = '';
	
	const DEFAULT_APPLICATION_DIR = 'app';
	const APPLICATION_STARTER = 'starter';
	
	// Website custom
	// const DEFAULT_KEYWORDS = '';
	// const DEFAULT_META_DESCRIPTION = '';
	// const DEFAULT_NAME_AUTHOR = '';
	// const SITE_NAME = '';
	
	const FULL_APP_PATH = '/Users/.../.../upcms-template/';
	const STORAGE_PATH = 'storage';
	
	## SITE CONFIG
	const PATH_NAME = 'upcms-template/'; // Default: '/'
	const SITE_HTTP = 'http://localhost/';
	
	const PATH_NAMES = '';
	const SITE_HTTPS = '';
	
	## CONFIG ##
	// Environment: production | development | adjusting
	const ENV = 'development';
	const MYSQL_LOG_PATH = "log/mysql.log";
	const ERROR_LOG_PATH = "log/errors.log";
}

class CMSConfig
{
	const DEBUG = true;
	const CMS_DIR = 'admin';
	const CONNECTION_HASH = '12345678';
	
	const APP_NAME = 'Template';
	const USERS_TABLE_NAME = 'users';
	const USERS_NAME_COLUMN = 'name';
	const USERS_USERNAME_COLUMN = 'email';
	const USERS_PASSWORD_COLUMN = 'password';
	
	const CONNECTION_SESSION_VAR = 'teste_connection_id';
	
	const ALLOW_DOMAIN = 'http://cloud.bugios.com';
}

?>