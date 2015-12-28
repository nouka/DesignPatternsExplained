<?php
/**
 * Decorator.
 */
class Client
{
    public static function main()
    {
        $myFactory = new Factory();
        $myComponent = $myFactory->getComponent();
    }
}

abstract class Component
{
    abstract public function prtTicket();
}

class SalesTicket extends Component
{
    public function prtTicket()
    {
        // 売上伝票の印刷処理
    }
}

abstract class TicketDecorator extends Component
{
    private $myComponent;

    public function __construct($myComponent)
    {
        $this->myComponent = $myComponent;
    }

    public function callTrailer()
    {
        if ($this->myComponent != null) {
            $this->myComponent->prtTicket();
        }
    }
}

class Header1 extends TicketDecorator
{
    public function __construct($myComponent)
    {
        parent::__construct($myComponent);
    }

    public function prtTicket()
    {
        // ヘッダ1用のコード
        $this->callTrailer();
    }
}

class Header2 extends TicketDecorator
{
    public function __construct($myComponent)
    {
        parent::__construct($myComponent);
    }

    public function prtTicket()
    {
        // ヘッダ2用のコード
        $this->callTrailer();
    }
}

class Footer1 extends TicketDecorator
{
    public function __construct($myComponent)
    {
        parent::__construct($myComponent);
    }
    public function prtTicket()
    {
        // フッタ1用のコード
        $this->callTrailer();
    }
}

class Footer2 extends TicketDecorator
{
    public function __construct($myComponent)
    {
        parent::__construct($myComponent);
    }
    public function prtTicket()
    {
        // フッタ2用のコード
        $this->callTrailer();
    }
}

class Factory
{
    public function getComponent()
    {
        $myComponent = new SalesTicket();
        $myComponent = new Footer1($myComponent);
        $myComponent = new Header1($myComponent);

        return $myComponent;
    }
}
