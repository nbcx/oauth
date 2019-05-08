<?php
/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace nbcx\oauth;

use nbcx\oauth\token\IToken;

/**
 * Token
 *
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019/4/28
 */
class Token {

    protected $token;

    public function driver(IToken $token) {
        $this->token = $token;
    }

    public function getToken() {

    }

}