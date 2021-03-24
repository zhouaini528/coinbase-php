<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Reports extends Request
{
    /**
     * POST /reports
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/reports';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /reports/:report_id
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/reports/:'.$data['report_id'];
        $this->data=$data;
        return $this->exec();
    }
}
