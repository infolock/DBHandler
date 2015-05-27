# DBHandler
DBHandler is a PHP Object that handles database connections via PDO.  It is highly configurable and should save a lot of boilerplate code for working with MySQL.  There is still yet some work that can be done with it, so feel free to do so.

## Methods
####`__construct( array $db_info )`
Note that this is public rather than private ( in case you don't want to use the singleton stuff )

####`getInstance()`
(static) Main entry point for obtaining an instance to the Default DB Singleton instance

####`getInstanceUsingDbInfo( array $db_info )`
(static) For obtaining a singleton instance to a specific Database with info

####`closeInstanceUsingDbName( $db_name )`
(static) Used to close the instance connection and free up the object.

####`query( $sql )`
Convience method to PDO query.

####`fetchRow( $sql, $fetch_style )`
Convience method for issuing a query, and then fetching a single row from a select statement.

####`fetchRows( $sql, $fetch_style )`
Convience method for issuing a query, and then fetchAll for all rows found from a select statement.

####`fetchColumn( $sql, $column )`
Convience method for issuing a query, and then fetchColumn to obtain a specific column for a select statement.

####`prepare( $sql )`
Convience method to the PDO prepare method.

####`begin()`
Convience method to the PDO begin method for InnoDB transations

####`commit()`
Convience method to the PDO commit method for InnoDB transactions

####`rollback()`
Convience method to the PDO rollback method for InnoDB transactions

####`lastInsertId()`
Convience method to the PDO lastInsertId method

####`isValidTable( $table )`
Helper method to check wether a the table name passed in ($table) is a valid table for the current instnace being used.

####`isValidColumn( $table, $column )`
Helper method to check wether a the column ($column) name passed in for a table ($table) is a valid column using the current database instance connection.

####`infoForTable( $table )`
Helper method to obtain table information schema for the supplied table ($table)

## Examples

Check out the included `examples` folder for how to use this tool.

* **examples/basic/example.php** - A very basic example
* **examples/subclass/example.php** - An example showing how to subclass the `Handler` base class
* **examples/advanced/example.php** - Includes a more advanced example using an `autoloader` and `namespace` folder structure.

## License
The MIT License (MIT)
