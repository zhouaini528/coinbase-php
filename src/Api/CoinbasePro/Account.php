<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Account extends Request
{
    /**
     * GET /accounts
     * */
    public function getList(array $data=[]){
        $this->type='GET';
        $this->path='/accounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /accounts/<account-id>
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/accounts/'.$data['account_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /accounts/<account-id>/ledger
     * */
    public function getLedger(array $data=[]){
        $this->type='GET';
        $this->path='/accounts/'.$data['account_id'].'/ledger';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /accounts/<account_id>/holds
     * */
    public function getHolds(array $data=[]){
        $this->type='GET';
        $this->path='/accounts/'.$data['account_id'].'/holds';
        $this->data=$data;
        return $this->exec();
    }
}
