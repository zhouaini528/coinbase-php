<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Fills extends Request
{
    /**
     * GET /fills
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/fills';
        $this->data=$data;
        return $this->exec();
    }
}
