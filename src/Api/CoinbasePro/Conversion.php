<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Conversion extends Request
{
    /**
     * POST /conversions
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/conversions';
        $this->data=$data;
        return $this->exec();
    }
}
