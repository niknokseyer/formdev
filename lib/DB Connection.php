<?php
########################################################
# FORMDEV Website v2.0                                 #
#                                                      #
# Formation and Development                            #
# All Rights Reserved FORMDEV Copyright 2011           #
########################################################

# INFORMATION:
# DBConnection.php 
#       - this is the class that handles the connection of the application to the database
#       - this class handles the modification of system settings
#       
# FUNCTION INFORMATION:
#       1. CONSTRUCTOR:
#               - sets up the database connection by loading the MDB.php library and the config.php file for the database connection credentials
#               - PEAR's MDB.php library is needed for this class to function
#               - the database connection credentials are located at /config.php
#       2. DB FUNCTIONS:
#               a. closeDBConnection () - disconnects the connection from database
#       3. SYSTEM MODIFICATION:
#               a. changeBirthdayReminderSetting (value) - change the birthday reminder interval
#               b. changePickupReminderSetting (value) - change the pickup reminder interval
#               c. changeFollowupReminderSetting (value) - change the birthday followup interval
#               d. changeCommisionRateSetting (value) - change the commision rate of the agents
#               e. changeAllowanceRateSetting (value) - change the allowance rate of the agents
#

class DBConnection{
# FOR CLASS MANAGEMENT #
#       The following variables are set to uppercase. This means that they are   
#       class monitoring variables.             

        # FOR DETERMINING THAT THE CLASS HAS ALREADY BEEN INSTANTIATED #
        # boolean variable [ value is NULL when class has not been instantiated ]
                private $CLASS_INSTANTIATED = NULL;                                                                          

        # CLASS MESSAGE_HANDLE HOLDER #
        # handles the error and notification messages of the class to notify the user 
        # to capture all SQL and system error, notifications and logs 
                public $MESSAGE_HANDLE = NULL;

        # DB_HANDLE INSTANCE HOLDER #
        # database connection handler [ MYSQL ]
        # instance of the database handle is placed here for the system to use the database with ease 
                public $DB_HANDLE = NULL;

# CLASS CONSTANT VARIABLES #
# this is for class management purposes
        private $errorArray = array("DB_NOTCONNECTED" => "Not connected to database.",
                                                            "DB_QUERYERROR" => "Problem with query",
                                                            "DB_INVALIDFIELD" => "Invalid field being accessed."
                                                           );
##############################
# SYSTEM'S CLASS CONSTRUCTOR #
##############################
        public function DBConnection(){     
                # this is to allow you to access the config.php values for the database 
                        define ('ACCESS', true);
                        $abs_root = '../';
                # include the needed / required libraries
                        //require_once($abs_root . 'lib/PEAR/PEAR/MDB.php');
                        //require_once($abs_root . 'config.php');
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $dbname = 'formdev';
                # Data Source Name: This is the universal connection string
                        //$dsn = "mysql://$dbuser:$dbpass@$dbhost/$dbname";

                # MDB::connect will return a PEAR MDB object on success or an PEAR MDB Error object on error
                        //$this->DB_HANDLE = MDB::connect($dsn);
                        if(!$this->DB_HANDLE = mysql_connect($dbhost, $dbuser, $dbpass)){
                                die('Cannot connect to MySQL Database Server'); // remover when site to be deployed
                        }
        
                        if(!mysql_select_db($dbname, $this->DB_HANDLE)){
                                die('Unable to select \'' . $dbname . '\' database'); // remove when site is to be deployed
                        }                       
        }       
                
        public function closeDBConnection () {
                mysql_close($this->DB_HANDLE);
                        }
                
}       
?>