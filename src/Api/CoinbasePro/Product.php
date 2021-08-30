<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Product extends Request
{
    /**
     * GET /products
     * */
    public function getList(array $data=[]){
        $this->type='GET';
        $this->path='/products';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /products/<product-id>
     * */
    public function getProduct(array $data=[]){
        $this->type='GET';
        $this->path='/products/'.$data['product_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /products/<product-id>/book
     * */
    public function getBook(array $data=[]){
        $this->type='GET';
        $this->path='/products/'.$data['product_id'].'/book';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /products/<product-id>/ticker
     * */
    public function getTicker(array $data=[]){
        $this->type='GET';
        $this->path='/products/'.$data['product_id'].'/ticker';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /products/<product-id>/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/products/'.$data['product_id'].'/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /products/<product-id>/candles
     * */
    public function getCandles(array $data=[]){
        $this->type='GET';
        $this->path='/products/'.$data['product_id'].'/candles';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /products/<product-id>/stats
     * */
    public function getStats(array $data=[]){
        $this->type='GET';
        $this->path='/products/'.$data['product_id'].'/stats';
        $this->data=$data;
        return $this->exec();
    }
}
