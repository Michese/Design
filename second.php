<?php
echo "<a href='index.php'>Обратно</a><br>";

interface IPayment {
    public function payOrder(float $amount, string $phone);
}

class QiwiPayment implements IPayment {
    public function payOrder(float $amount, string $phone) {
        echo "Стоимость: " . $amount . "<br>" .
            "Телефон: " . $phone . "<br>" .
            "Оплачено с помощью Qiwi" . "<br>";
    }
}

class YandexPayment implements IPayment {
    public function payOrder(float $amount, string $phone) {
        echo "Стоимость: " . $amount . "<br>" .
            "Телефон: " . $phone . "<br>" .
            "Оплачено с помощью Yandex" . "<br>";
    }
}

class WebMoneyPayment implements IPayment {
    public function payOrder(float $amount, string $phone) {
        echo "Стоимость: " . $amount . "<br>" .
        "Телефон: " . $phone . "<br>" .
        "Оплачено с помощью WebMoney" . "<br>";
    }
}

function buySocks(IPayment $payment, string $phone) {
    $amount = 30.2;
    $payment->payOrder($amount, $phone);
}

buySocks(new YandexPayment(), "89000000000");

buySocks(new QiwiPayment(), "89050000000");

buySocks(new WebMoneyPayment(), "89050006300");