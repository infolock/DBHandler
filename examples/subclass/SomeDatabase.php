<?php
include_once( 'Handler.php' );
namespace YOUR_PRIMARY_NAMESPACE_HERE\Database;

class SomeDatabase extends Handler {
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
                'dbname'   => 'SomeDatabase',
                'username' => 'some_database_username',
                'password' => 'some_database_password'
            );
        }

        parent::__construct( $db_info );
    }

    /**
     * Main entry point for obtaining an instance to the Default DB Singleton instance
     *
     * @return SomeDatabase instance
     */
    public static function getInstance() {
        if( !isset( self::$localInstance ) ) {
            self::$localInstance = new SomeDatabase();
        }

        parent::$instance = self::$localInstance;

        return parent::getInstance();
    }
}