<?php
include_once( 'Handler.php' );

$rows = array();

$sql  = "SELECT * FROM `some_table`";
try {
    $dbh = \YOUR_PRIMARY_NAMESPACE_HER\Database\Handler::getInstance()->dbHandle;

    $stmt = $dbh->prepare( $sql );
    $stmt->execute();

    $rows = $stmt->fetchAll( \PDO::FETCH_ASSOC );
} catch( \Exception $e ) {
    error_log( "ERROR in " . __FILE__ . "::Line - " .__LINE__ . "() \n Error Thrown was: " . $e->getMessage() );
}

echo var_export( $rows, true );
