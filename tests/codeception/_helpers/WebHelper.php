<?php
namespace Codeception\Module;

// here you can define custom functions for WebTester

class WebHelper extends \Codeception\Module
{
    /**
     * Makes sure that WebTester is logged in.
     * @param array $user An associative array containing keys 'username'
     * and 'password'.
     */
    public function loginAs($user)
    {
        $web = $this->getModule('PhpBrowser');
        $web->amOnPage('/bolt/login');
        $web->fillField('username', $user['username']);
        $web->fillField('password', $user['password']);
        $web->click('Log on');
    }

    /**
     * Makes sure that WebTester is logged in using email.
     *
     * @param array $user An associative array containing keys 'username' and 'password'.
     */
    public function loginWithEmailAs($user)
    {
        $web = $this->getModule('PhpBrowser');
        $web->amOnPage('/bolt/login');
        $web->fillField('username', $user['email']);
        $web->fillField('password', $user['password']);
        $web->click('Log on');
    }
}
