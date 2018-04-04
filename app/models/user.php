<?php
class User extends AppModel {
    public $validation = array(
                'username' => array(
                    'value' => array(
                            'validate_unique'
                        ),
                ),
            );
    
    public static function isExist($uname){
        $db = DB::conn();
        $rows = $db->rows('SELECT * FROM users WHERE username = ?', array($uname));
        //print_r($rows);
        $n = count($rows);
        if ($n>0) {
            return true;
        }
        return false;
    }
    
    public function hasAuth(){
        $this->validate();
        if ($this->hasError()) {
            throw new ValidationException('invalid user, access denied');
        }
    }
}