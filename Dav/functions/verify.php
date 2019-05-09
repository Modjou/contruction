<?php
class Verify
{

    public static function input($data)
    {
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = trim($data);
        $data = strip_tags($data);

        return $data;
    }

    public static function user($mail, $db)
    {
        require_once 'model/database.php';

        $result = $db->prepare('SELECT * FROM users WHERE mail = ?');
        $result->execute([$mail]);
        $result = $result->fetch();
        Database::disconnect();

        if(empty($result)) {
            return 'rien';
        }
        else {
            return $result['mail'];
        }
    }
}
