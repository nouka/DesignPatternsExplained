<?php
/**
 * Observerパターンの実装.
 */
class Customer
{
    // Java例題ではVectorを使って静的イニシャライズを行っている。
    // PHPで可変長配列は普通に定義できる。
    private static $myObs = array();

    public static function attach($myObserver)
    {
        array_push(self::$myObs, $myObserver);
    }

    public static function detach($myObserver)
    {
        array_shift(self::$myObs, $myObserver);
    }

    public function getState()
    {
        // 必要な情報を取得する
        return;
    }

    public function notifyObs()
    {
        foreach (self::$myObs as $obs) {
            $obs->update($this);
        }
    }
}

interface MyObserver
{
    public function update($myCust);
}

class AddrVerification implements MyObserver
{
    public function __construct()
    {
    }

    public function update($myCust)
    {
        // 住所の確認処理
        // $myCustを使って顧客に関するより詳細な情報を入手できる
    }
}

class WelcomeLetter implements MyObserver
{
    public function __construct()
    {
    }

    public function update($myCust)
    {
        // 挨拶状Emailの送信処理
        // $myCustを使って顧客に関するより詳細な情報を入手できる
    }
}
