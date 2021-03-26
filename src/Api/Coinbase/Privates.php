<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\Coinbase;

use Lin\Coinbase\Request;

class Privates extends Request
{
    /**
     *GET https://api.coinbase.com/v2/notifications
     * */
    public function getNotifications(array $data=[]){
        $this->type='GET';
        $this->path='/v2/notifications';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/notifications/:notifications_id
     * */
    public function getNotification(array $data=[]){
        $this->type='GET';
        $this->path='/v2/notifications/'.$data['notifications_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/users/:user_id
     * */
    public function getUser(array $data=[]){
        $this->type='GET';
        $this->path='/v2/users/'.$data['user_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/user
     * */
    public function getUsers(array $data=[]){
        $this->type='GET';
        $this->path='/v2/user';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/user/auth
     * */
    public function getUserAuth(array $data=[]){
        $this->type='GET';
        $this->path='/v2/user/auth';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *PUT https://api.coinbase.com/v2/user
     * */
    public function putUser(array $data=[]){
        $this->type='PUT';
        $this->path='/v2/user';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts
     * */
    public function getAccounts(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *PUT https://api.coinbase.com/v2/accounts/:account_id
     * */
    public function putAccount(array $data=[]){
        $this->type='PUT';
        $this->path='/v2/accounts/'.$data['account_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE https://api.coinbase.com/v2/accounts/:account_id
     * */
    public function deleteAccount(array $data=[]){
        $this->type='DELETE';
        $this->path='/v2/accounts/'.$data['account_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/addresses
     * */
    public function getAccountAddresses(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/addresses';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/addresses/:address_id
     * */
    public function getAccountAddress(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/addresses/'.$data['address_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/addresses/:address_id/transactions
     * */
    public function getAccountAddressTransactions(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/addresses/'.$data['address_id'].'/transactions';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/addresses
     * */
    public function postAccountAddresses(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/addresses';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/transactions
     * */
    public function getAccountTransactions(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/transactions';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/transactions/:transaction_id
     * */
    public function getAccountTransaction(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/transactions/'.$data['transaction_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/transactions/:transaction_id/complete
     * */
    public function postAccountTransactionComplete(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/transactions/'.$data['transaction_id'].'/complete';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/transactions/:transaction_id/resend
     * */
    public function postAccountTransactionResend(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/transactions/'.$data['transaction_id'].'/resend';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE https://api.coinbase.com/v2/accounts/:account_id/transactions/:transaction_id
     * */
    public function deleteAccountTransaction(array $data=[]){
        $this->type='DELETE';
        $this->path='/v2/accounts/'.$data['account_id'].'/transactions/'.$data['transaction_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/buys
     * */
    public function getAccountBuys(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/buys';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/buys/:buy_id
     * */
    public function getAccountBuyId(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/buys/'.$data['buy_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/buys
     * */
    public function postAccountBuys(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/buys';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/buys/:buy_id/commit
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/sells
     * */
    public function getAccountSells(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/sells';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/sells/:sell_id
     * */
    public function getAccountSell(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/sells/'.$data['sell_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/sells
     * */
    public function postAccountSells(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/sells';
        $this->data=$data;
        return $this->exec();
    }
    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/sells/:sell_id/commit
     * */
    public function postAccountSellCommit(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/sells/'.$data['sell_id'].'/commit';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/deposits
     * */
    public function getAccountDeposits(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/deposits';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/deposits/:deposit_id
     * */
    public function getAccountDeposit(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/deposits/'.$data['deposit_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/deposits
     * */
    public function postAccountDeposits(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/deposits';
        $this->data=$data;
        return $this->exec();
    }
    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/deposits/:deposit_id/commit
     * */
    public function postAccountDepositCommit(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/deposits/'.$data['deposit_id'].'/commit';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/withdrawals
     * */
    public function getAccountWithdrawals(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/withdrawals';
        $this->data=$data;
        return $this->exec();
    }
    /**
     *GET https://api.coinbase.com/v2/accounts/:account_id/withdrawals/:withdrawal_id
     * */
    public function getAccountWithdrawal(array $data=[]){
        $this->type='GET';
        $this->path='/v2/accounts/'.$data['account_id'].'/withdrawals/'.$data['withdrawal_id'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/withdrawals
     * */
    public function postAccountWithdrawals(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/withdrawals';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.coinbase.com/v2/accounts/:account_id/withdrawals/:withdrawal_id/commit
     * */
    public function postAccountWithdrawalCommit(array $data=[]){
        $this->type='POST';
        $this->path='/v2/accounts/'.$data['account_id'].'/withdrawals/'.$data['withdrawal_id'].'/commit';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/payment-methods
     * */
    public function getPaymentMethods(array $data=[]){
        $this->type='GET';
        $this->path='/v2/payment-methods';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/payment-methods/:payment_method_id/
     * */
    public function getPaymentMethod(array $data=[]){
        $this->type='GET';
        $this->path='/v2/payment-methods/'.$data['payment_method_id'];
        $this->data=$data;
        return $this->exec();
    }
}
