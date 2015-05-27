<?php
namespace XYZCompany\Database\MyApp;

class User {
    static function fetchAll() {
        $rst = array();

        $sql = "SELECT * FROM `user`";
        try {
            $dbh = \XYZCompany\Database\MyApp::getInstance()->dbHandle;

            $stmt = $dbh->prepare( $sql );
            $stmt->execute();

            $rst = $stmt->fetchAll( \PDO::FETCH_ASSOC );
        } catch( \Exception $e ) {
            error_log( "ERROR at " . __CLASS__ . "::" . __FUNCTION__ . "() \n Error Thrown was: " . $e->getMessage() );
        }

        return $rst;
    }

    static function fetchById( $user_id ) {
        $rst = array();

        $sql = "SELECT * FROM `user` WHERE `user_id` = ?";
        try {
            $dbh = \XYZCompany\Database\MyApp::getInstance()->dbHandle;

            $stmt = $dbh->prepare( $sql );
            $stmt->bindValue( 1, $user_id, \PDO::PARAM_INT );
            $stmt->execute();

            $rst = $stmt->fetch( \PDO::FETCH_ASSOC );
        } catch( \Exception $e ) {
            error_log( "ERROR at " . __CLASS__ . "::" . __FUNCTION__ . "() \n Error Thrown was: " . $e->getMessage() );
        }

        return $rst;
    }

    static function fetchByUsername( $username ) {
        $rst = array();

        $sql = "SELECT * FROM `user` WHERE `username` = ?";
        try {
            $dbh = \XYZCompany\Database\MyApp::getInstance()->dbHandle;

            $stmt = $dbh->prepare( $sql );
            $stmt->bindValue( 1, $username, \PDO::PARAM_STR );
            $stmt->execute();

            $rst = $stmt->fetch( \PDO::FETCH_ASSOC );
        } catch( \Exception $e ) {
            error_log( "ERROR at " . __CLASS__ . "::" . __FUNCTION__ . "() \n Error Thrown was: " . $e->getMessage() );
        }

        return $rst;
    }
}