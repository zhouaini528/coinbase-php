<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Oracle extends Request
{
    /**
     * GET /oracle
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/oracle';
        $this->data=$data;
        return $this->exec();
    }
}
