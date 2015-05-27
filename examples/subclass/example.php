<?php
include_once( 'SomeTable.php' );

$rows = YOUR_PRIMARY_NAMESPACE_HERE\Database\SomeDatabase\SomeTable::fetchAll();

if( !empty( $rows ) ) {
    echo var_export( $rows, true );
} else {
    echo 'Nothing was found!';
}
