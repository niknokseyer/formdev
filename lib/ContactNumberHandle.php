<?php
########################################################
# FORMDEV Website v2.0                                 #
#                                                      #
# Formation and Development                            #
# All Rights Reserved FORMDEV Copyright 2011           #
########################################################

# INFORMATION:
# ContactNumberHandle.php 
#       - this is the class that handles the connection of the transaction window to the database
#       - all MODIFY, SELECT, and DELETE functions are housed in this class
#       
# FUNCTION INFORMATION:
#       1. CONSTRUCTOR:
#               - sets up the database connection
#       2. LOAD INFORMATION DATA:
#               a. getContactNumber (ContactNumberId) - gets the contactnumber of the ContactNumber with the corresponding id
#       3. STORE DATA:
#               a. newContactNumber () - adds a new ContactNumber
#       4. MODIFY DATA:
#               a. setContactNumberValue (item, value, ContactNumberId) - change the value of the corresponding item of an ContactNumber's contactnumber 


class ContactNumberHandle{
# FOR CLASS MANAGEMENT #
#       The following variables are set to uppercase. This means that they are    
#       class monitoring variables.                     

        # FOR DETERMINING THAT THE CLASS HAS ALREADY BEEN INSTANTIATED #
        # boolean variable [ value is NULL when class has not been instantiated ]
                private $CLASS_INSTANTIATED = NULL;                                                                   

        # CLASS MESSAGE_HANDLE HOLDER #
        # handles the error and notification messages of the class to notify the contactnumber 
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
        public function ContactNumberHandle(){
                # include the needed / required library
                        require_once('DBConnection.php');
                # instantiate the DBConnection and assign it to the class attribute DB_CONNECTION       
                        $databaseConnection = new DBConnection();
                        $this->DB_CONNECTION = $databaseConnection->DB_CONNECTION;
        }       

##############################  
# LOAD SYSTEM DATA FUNCTIONS #  
##############################                  
        public function getContactNumber ($ContactNumberId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/
                                # protection against SQL injection, add slashes to escape all escape characters
                                        $ContactNumberId = addslashes($ContactNumberId);
                                # prepare the statement
                                        $statement = "SELECT * FROM contactnumber WHERE idcontactnumber = '$ContactNumberId'";
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[ContactNumberHandle:getContactNumber]';
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
        
                public function getContactNumberItem ($item, $ContactNumberId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/
                                # protection against SQL injection, add slashes to escape all escape characters
                                        $ContactNumberId = addslashes($ContactNumberId);
                                        $item = addslashes($item);
                                # prepare the statement
                                        $statement = "SELECT $item FROM contactnumber WHERE idcontactnumber = '$ContactNumberId'";
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[ContactNumberHandle:getContactNumberItem]';
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
        
        public function addContactNumber ($valuesArray) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/                
                                # prepare the statement 
                                        $statement = "INSERT INTO contactnumber (                              
                                                        number,
                                                        type
                                                ) 
                                                VALUES (
                                                        '{$valuesArray['number']}',
                                                        '{$valuesArray['type']}'
                                                )";
                                        
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[ContactNumberHandle:addContactNumber]';
                                        }
                                        else {
                                                # debugging purposes <remove on production>     
                                                        //echo "updated the database";
                        
                                                # return the ticket_id of the newly inserted client                                                                             
                                                        return mysql_insert_id();
                                        }       
                        //}
        }
                
#########################
# MODIFY DATA FUNCTIONS #
#########################
        
        public function setContactNumberValue ($item, $value, $ContactNumberId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {  */                      
                                $item = addslashes($item);
                                $value = addslashes($value);
                                $ContactNumberId = addslashes($ContactNumberId);
                                                # prepare the statement
                                                        $statement = "UPDATE contactnumber SET $item = '$value' WHERE idcontactnumber = '$ContactNumberId'";  
                                                # query & check if error has occured
                                                        if(!$result = mysql_query($statement)) {
                                                                return $errorArray['DB_QUERYERROR'] . ' -[ContactNumberHandle:setContactNumberValue]';
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