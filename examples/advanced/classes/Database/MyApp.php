<?php
namespace XYZCompany\Database;

class MyApp extends Handler {
    public static $localInstance = null;

    /**
     * Main constructor
     *
     * @param  array $db_info
     * @throws PDOException
     */
    public function __construct( array $db_info = null ) {
        if( empty( $db_info ) ) {
            $db_info = array(
                'hostname' => 'localhost',
                'dbname'   => 'myapp',
                'username' => 'myapp_username',
                'password' => 'myapp_password'
            );
        }

        parent::__construct( $db_info );
    }

    /**
     * Main entry point for obtaining an instance to the Default DB Singleton instance
     *
     * @return MyApp instance
     */
    public static function getInstance() {
        if( !isset( self::$localInstance ) ) {
            self::$localInstance = new MyApp();
        }

        parent::$instance = self::$localInstance;

        return parent::getInstance();
    }
}