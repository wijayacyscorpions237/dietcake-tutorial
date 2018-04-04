<?php
class UserController extends AppController {
    public function index() {
        //$ctrUser = User::isExist('jameswij');
        //echo $ctrUser;
        $check='jameswij';
        $val = validate_unique($check);
        var_dump($val);
        $this->set(get_defined_vars());
	}
    
    public function access(){
        $user = new User();
        $user->username = 'jameswij9';
        try {
            $user->hasAuth();
        } catch (ValidationException $e) {
            print_r($e);
        }
    }
}