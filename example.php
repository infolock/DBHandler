<?php
###
# BASIC EXAMPLE
###
$dbh = YOUR_PRIMARY_NAMESPACE_HERE\Database\Handler::getInstance()->dbHandle;
$stmt = $dbh->prepare( "SELECT * FROM `some_table`" );
$stmt->execute();
$rows = $stmt->fetchAll( \PDO::FETCH_ASSOC );

echo var_export( $row, true );



###
# SUBCLASS EXAMPLE
###

namespace YOUR_PRIMARY_NAMESPACE_HERE\Database;
