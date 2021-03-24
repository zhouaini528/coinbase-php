<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Coinbase extends Request
{
    /**
     * GET /coinbase-accounts
     * */
    public function getAccounts(array $data=[]){
        $this->type='GET';
        $this->path='/coinbase-accounts';
        $this->data=$data;
        return $this->exec();
    }
}
