<?php
/**
 * Strong Authentication Library
 *
 * User authentication and authorization library
 *
 * @license     MIT Licence
 * @category    Libraries
 * @author      Andrew Smith
 * @link        http://www.silentworks.co.uk
 * @copyright   Copyright (c) 2012, Andrew Smith.
 * @version     1.0.0
 */

namespace Strong\Provider;

class Activerecord extends \Strong\Provider
{
    /**
     * User login check based on provider
     *
     * @return boolean
     */
    public function loggedIn()
    {
        return (isset($_SESSION['BUGSBUNNY']) && !empty($_SESSION['BUGSBUNNY']));
    }

    /**
     * To authenticate user based on username or email
     * and password
     *
     * @param string $usernameOrEmail
     * @param string $password
     * @param bool $remember
     * @return array
     */
    public function login($usernameOrEmail, $password, $remember = false)
    {
        if (!is_string($usernameOrEmail)) {
            return false;
        }
        /*$user = \User::find_by_username_or_email($usernameOrEmail, $usernameOrEmail);*/
        $user = \User::find('first', array('conditions' => array('usr_loginname = ?', $usernameOrEmail)));

        if($user != null ){
            if ($user->usr_loginname === $usernameOrEmail && $this->hashVerify($password, $user->usr_password)) {
                return $this->completeLogin($user);
            }
        }
        return false;
    }

    /**
     * Login and store user details in Session
     *
     * @param object $user
     * @return boolean
     */
    protected function completeLogin($user)
    {
        $users = \User::find($user->usr_id);
        // $users->logins = $user->logins + 1;
        // $users->last_login = time();
        // $users->save();

        $userInfo = array(
            'id' => $user->usr_id,
            'loginname' => $user->usr_loginname,
            'name' => $user->usr_name,
            'tipe' => $user->usr_tipe,
            'rol' => $user->id_rol,
            'logged_in' => true
            );

        return parent::completeLogin($userInfo);
    }

    /**
     * @param $password
     * @return \false|string
     */
    public function hashPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * @param $password
     * @param $hash
     * @return bool
     */
    public function hashVerify($password, $hash)
    {
        return md5($password) === $hash;
    }
}
