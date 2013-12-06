<?php

/**
 * Filename: MessageDAO.php (Data Access Object)
 * Message class for the Guestbook
 */
class MessageDAO {

    /**
     * @param Message object
     * @return Boolean is the message added to messages table or not
     */
    public static function createMessage($data) {

        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        $is_approved = "N";
        
    return mysql_query("INSERT into mess (name,email,message,is_approved,date_posted) VALUES('$name','$email','$message','$is_approved',CURRENT_DATE())");
        // Execute SQL query to INSERT into messages table
        // ... write your code 
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function getMessage($id) {
        return mysql_query("SELECT * from message order by id asc");
        // Execute SQL to fetch message based on ID
        // ... write your code 
    }

    /**
     * @return Array of Message objects
     */
    public static function getAllMessages() {
       return  mysql_query("SELECT * from message order by id asc");
        // Execute SQL to fetch all messages
        // ... write your code 
    }

    /**
     * @param Message object
     * @return Boolean is the message updated or not
     */
    public static function updateMessage($message) {
        // Execute SQL to update the message
        // ... write your code 
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function deleteMessage($id) {
        return mysql_query("DELETE from mess where id = '".$id."'");
        // Execute SQL to delete the message based on ID
        // ... write your code 
    }

    /**
     * Set is_approved to 'Y'
     * @param Integer id number
     * @return Boolean
     */
    public static function approveMessage($id) {
        return mysql_query("UPDATE mess SET is_approved='Y' WHERE id='$approved'");
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function rejectMessage($id) {
        return mysql_query("UPDATE mess SET is_approved='N' WHERE id='$reject'");
    }
}

?>