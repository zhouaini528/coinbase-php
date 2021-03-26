<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase;

use Lin\Coinbase\Api\Coinbase\Publics;
use Lin\Coinbase\Api\Coinbase\Privates;

class Coinbase
{
    protected $key;
    protected $secret;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://api.coinbase.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'options'=>$this->options,

            'platform'=>'coinbase',
            'version'=>'v2',
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    function publics(){
        return new Publics($this->init());
    }

    /**
     *
     * */
    function privates(){
        return new Privates($this->init());
    }
}
