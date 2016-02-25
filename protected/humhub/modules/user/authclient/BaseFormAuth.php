<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace humhub\modules\user\authclient;

use yii\base\NotSupportedException;
use humhub\modules\user\models\forms\Login;

/**
 * BaseFormAuth is a base class for AuthClients using the Login Form
 * 
 * @since 1.1
 */
class BaseFormAuth extends BaseClient
{

    /**
     * @var Login the login form model
     */
    public $login = null;

    /**
     * Authenticate the user using the login form.
     * 
     * @throws NotSupportedException
     */
    public function auth()
    {
        throw new NotSupportedException('Method "' . get_class($this) . '::' . __FUNCTION__ . '" not implemented.');
    }

}