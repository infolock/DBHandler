<?php
include_once( 'SomeDatabase.php' );
namespace YOUR_PRIMARY_NAMESPACE_HERE\Database\SomeDatabase;

class SomeTable {
    static function fetchAll() {
        $rst = array();

        $sql = "SELECT * FROM `some_table`";
        try {
            $dbh = \YOUR_PRIMARY_NAMESPACE_HERE\Database\SomeDatabase::getInstance()->dbHandle;

            $stmt = $dbh->prepare( $sql );
            $stmt->execute();

            $rst = $stmt->fetchAll( \PDO::FETCH_ASSOC );
        } catch( \Exception $e ) {
            error_log( "ERROR at " . __CLASS__ . "::" . __FUNCTION__ . "() \n Error Thrown was: " . $e->getMessage() );
        }

        return $rst;
    }
}