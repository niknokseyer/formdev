<?php
########################################################
# FORMDEV Website v2.0                                 #
#                                                      #
# Formation and Development                            #
# All Rights Reserved FORMDEV Copyright 2011           #
########################################################

# INFORMATION:
# FaciPerClassHandle.php 
#       - this is the faciperfaciperclass that handles the connection of the transaction window to the database
#       - all MODIFY, SELECT, and DELETE functions are housed in this faciperfaciperclass
#       
# FUNCTION INFORMATION:
#       1. CONSTRUCTOR:
#               - sets up the database connection
#       2. LOAD INFORMATION DATA:
#               a. getFaciPerClass (FaciPerClassId) - gets the faciperfaciperclass of the FaciPerClass with the corresponding id
#       3. STORE DATA:
#               a. newFaciPerClass () - adds a new FaciPerClass
#       4. MODIFY DATA:
#               a. setFaciPerClassValue (item, value, FaciPerClassId) - change the value of the corresponding item of an FaciPerClass's faciperfaciperclass 


class FaciPerClassHandle{
# FOR CLASS MANAGEMENT #
#       The following variables are set to uppercase. This means that they are    
#       faciperfaciperclass monitoring variables.                     

        # FOR DETERMINING THAT THE CLASS HAS ALREADY BEEN INSTANTIATED #
        # boolean variable [ value is NULL when faciperfaciperclass has not been instantiated ]
                private $CLASS_INSTANTIATED = NULL;                                                                   

        # CLASS MESSAGE_HANDLE HOLDER #
        # handles the error and notification messages of the faciperfaciperclass to notify the faciperfaciperclass 
        # to capture all sql and system error, notifications and logs 
                public $MESSAGE_HANDLE = NULL;

        # DB_CONNECTION INSTANCE HOLDER #
        # database connection handler [ MYSQL ]
        # instance of the database handle is placed here for the system to use the database with ease 
                public $DB_CONNECTION = NULL;
        
# CLASS CONSTANT VARIABLES #
# this is for faciperfaciperclass management purposes
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
        public function FaciPerClassHandle(){
                # include the needed / required library
                        require_once('DBConnection.php');
                # instantiate the DBConnection and assign it to the faciperfaciperclass attribute DB_CONNECTION       
                        $databaseConnection = new DBConnection();
                        $this->DB_CONNECTION = $databaseConnection->DB_CONNECTION;
        }       

##############################  
# LOAD SYSTEM DATA FUNCTIONS #  
##############################                  
        public function getFaciPerClass ($FaciPerClassId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/
                                # protection against SQL injection, add slashes to escape all escape characters
                                        $FaciPerClassId = addslashes($FaciPerClassId);
                                # prepare the statement
                                        $statement = "SELECT * FROM faciperfaciperclass WHERE idfaciperfaciperclass = '$FaciPerClassId'";
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[FaciPerClassHandle:getFaciPerClass]';
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
        
                public function getFaciPerClassItem ($item, $FaciPerClassId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/
                                # protection against SQL injection, add slashes to escape all escape characters
                                        $FaciPerClassId = addslashes($FaciPerClassId);
                                        $item = addslashes($item);
                                # prepare the statement
                                        $statement = "SELECT $item FROM faciperfaciperclass WHERE idfaciperfaciperclass = '$FaciPerClassId'";
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[FaciPerClassHandle:getFaciPerClassItem]';
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
        
        # the store functions stores the values to the faciperfaciperclass' attributes and then connects to the database to store the value
        # it is already assumed that the script that will provide the necessary input validation and error checking
        # the only security the setters provide is the addslashes() function to protect SQL injection from happening
        
        public function addFaciPerClass ($valuesArray) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {*/                
                                # prepare the statement 
                                        $statement = "INSERT INTO faciperfaciperclass (                              
                                                        iduser,
                                                        idclass,
														group
                                                ) 
                                                VALUES (
                                                        '{$valuesArray['iduser']}',
                                                        '{$valuesArray['idclass']}',
														'{$valuesArray['group']}'
                                                )";
                                        
                                # query & check if error has occured
                                        if(!$result = mysql_query($statement)) {
                                                return $errorArray['DB_QUERYERROR'] . ' -[FaciPerClassHandle:addFaciPerClass]';
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
        
        public function setFaciPerClassValue ($item, $value, $FaciPerClassId) {
                # check if the DB_CONNECTION has connected to the database
                        /*if ($this->DB_CONNECTION == NULL) {
                                return $errorArray['DB_NOTCONNECTED'];
                        }
                        else {  */                      
                                $item = addslashes($item);
                                $value = addslashes($value);
                                $FaciPerClassId = addslashes($FaciPerClassId);
                                                # prepare the statement
                                                        $statement = "UPDATE faciperfaciperclass SET $item = '$value' WHERE idfaciperfaciperclass = '$FaciPerClassId'";  
                                                # query & check if error has occured
                                                        if(!$result = mysql_query($statement)) {
                                                                return $errorArray['DB_QUERYERROR'] . ' -[FaciPerClassHandle:setFaciPerClassValue]';
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