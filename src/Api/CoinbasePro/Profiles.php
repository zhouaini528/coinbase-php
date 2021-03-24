<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Profiles extends Request
{
    /**
     * GET /profiles
     * */
    public function getList(array $data=[]){
        $this->type='GET';
        $this->path='/profiles';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /profiles/<profile_id>
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/profiles/'.$data['profile_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /profiles/transfer
     * */
    public function postTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/profiles/transfer';
        $this->data=$data;
        return $this->exec();
    }
}
