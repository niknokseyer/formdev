<?php
########################################################
# FORMDEV Website v2.0                                 #
#                                                      #
# Formation and Development                            #
# All Rights Reserved FORMDEV Copyright 2011           #
########################################################

# INFORMATION:
# AnnouncementHandle.php 
#       - this is the class that handles the connection of the transaction window to the database
#       - all MODIFY, SELECT, and DELETE functions are housed in this class
#       
# FUNCTION INFORMATION:
#       1. CONSTRUCTOR:
#               - sets up the database connection
#       2. LOAD INFORMATION DATA:
#               a. getAnnouncement (AnnouncementId) - gets the announcement of the Announcement with the corresponding id
#       3. STORE DATA:
#               a. newAnnouncement () - adds a new Announcement
#       4. MODIFY DATA:
#               a. setAnnouncementValue (item, value, AnnouncementId) - change the value of the corresponding item of an Announcement's announcement 


class AnnouncementHandle{
# FOR CLASS MANAGEMENT #
#       The following variables are set to uppercase. This means that they are    
#       class monitoring variables.                     

        # FOR DETERMINING THAT THE CLASS HAS ALREADY BEEN INSTANTIATED #
        # boolean variable [ value is NULL when class has not been instantiated ]
                private $CLASS_INSTANTIATED = NULL;                                                                   

        # CLASS MESSAGE_HANDLE HOLDER #
        # handles the error and notification messages of the class to notify the announcement 
        # to capture all sql and system error, notifications and logs 
                public $MESSAGE_HANDLE = NULL;

        # DB_CONNECTION INSTANCE HOLDER #
        # database connection handler [ MYSQL ]
        # instance of the database handle is placed here for the system to use the database with ease 
                public $DB_CONNECTION = NULL;
        
# CLASS CONSTANT VARIABLES #
# this is for class management purposes
        private $errorArray = array("DB_NOTCONNECTED" => "Not connected to database.",
                                                            "DB_QUERYERROR" => "Problem with query",
                                                            "DB_INVALIDFIELD" => "Invalid field being accessed."
                                                           );           
                                                           
        # permissions: #
        # 1 = admin
        # 2 = mod
        # 3 = faci
        # 4 = student / guest                                     

########################################
# TRANSACTION HANDLE CLASS CONSTRUCTOR #
########################################
        public function AnnouncementHandle(){
                # include the needed / required library
                        require_once('DBConnection.php');
                # instantiate the DBConnection and assign it to the class attribute DB_CONNECTION       
                        $databaseConnection = new DBConnection();
                        $this->DB_CONNECTION = $databaseConnection->DB_CONNECTION;
        }       

##############################  
# LOAD SYSTEM DATA FUNCTIONS #  
##############################                  
        public function getAnnouncement ($AnnouncementId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/
                                # protection against SQL injection, add slashes to escape all escape characters
                                        $AnnouncementId = addslashes($AnnouncementId);
                                # prepare the statement
                                        $statement = "SELECT * FROM announcement WHERE idannouncement = '$AnnouncementId'";
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[AnnouncementHandle:getAnnouncement]';
                                        }
                                        else {
                                                # debugging purposes <remove on production>     
                                                        //echo "got it";
                                        
                                                # get the entry values
                                                        $resultArray = mysql_fetch_array($result);
                                                # return the values                                                                                     
                                                        return $resultArray;
                                        }
                        //}
        }
        
                public function getAnnouncementItem ($item, $AnnouncementId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/
                                # protection against SQL injection, add slashes to escape all escape characters
                                        $AnnouncementId = addslashes($AnnouncementId);
                                        $item = addslashes($item);
                                # prepare the statement
                                        $statement = "SELECT $item FROM announcement WHERE idannouncement = '$AnnouncementId'";
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[AnnouncementHandle:getAnnouncementItem]';
                                        }
                                        else {
                                                # debugging purposes <remove on production>     
                                                        //echo "got it";
                                                
                                                # get the entry values
                                                        $resultArray = mysql_fetch_assoc($result);
                                                # return the values                                                                                     
                                                        return $resultArray[$item];
                                        }               
                        //}
        }
                
############################### 
# STORE SYSTEM DATA FUNCTIONS # 
############################### 
        
        # the store functions stores the values to the class' attributes and then connects to the database to store the value
        # it is already assumed that the script that will provide the necessary input validation and error checking
        # the only security the setters provide is the addslashes() function to protect SQL injection from happening
        
        public function addAnnouncement ($valuesArray) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/                
                                # prepare the statement 
                                        $statement = "INSERT INTO announcement (                              
                                                        iduser,
                                                        type,
                                                        message,
                                                        datetime
                                                ) 
                                                VALUES (
                                                        '{$valuesArray['iduser']}',
                                                        '{$valuesArray['type']}',
                                                        '{$valuesArray['message']}',
                                                        '{$valuesArray['datetime']}'
                                                )";
                                        
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[AnnouncementHandle:addAnnouncement]';
                                        }
                                        else {
                                                # debugging purposes <remove on production>     
                                                        //echo "updated the database";
                        
                                                # return the announcement_id of the newly inserted client                                                                             
                                                        return mysql_insert_id();
                                        }       
                        //}
        }
                
#########################
# MODIFY DATA FUNCTIONS #
#########################
        
        public function setAnnouncementValue ($item, $value, $AnnouncementId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {  */                      
                                $item = addslashes($item);
                                $value = addslashes($value);
                                $AnnouncementId = addslashes($AnnouncementId);
                                                # prepare the statement
                                                        $statement = "UPDATE announcement SET $item = '$value' WHERE idannouncement = '$AnnouncementId'";  
                                                # query & check if error has occured
                                                        if(!$result = mysql_query($statement)) {
                                                                return $errorArray['DB_QUERYERROR'] . ' -[AnnouncementHandle:setAnnouncementValue]';
                                                        }
                                                        else {
                                                                # debugging purposes <remove on production>     
                                                                        //echo "updated the database";
                                
                                                                # return the values                                                                                     
                                                                        return true;
                                                        }             
                        //}
        }
        
}       
?>