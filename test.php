<?php

/**
 * @property Zend_View $view
 */
class abc
{
}


class AccountController extends abc
{
    public function accountAction()
    {
        $this->view->adp->setWebusername("abc");
    }
}