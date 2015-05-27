<?php
use \XYZCompany\Database\MyApp\User as UserTable;

$users        = UserTable::fetchAll();
$user_by_id   = UserTable::fetchById( 123 );

$user_by_name = \XYZCompany\Database\MyApp\User::fetchByUsername::( 'jon' );
