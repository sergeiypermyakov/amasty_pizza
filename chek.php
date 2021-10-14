<?php

$pizzacost = $_POST['pizaselect'];
    if ($pizzacost == '15') {
        $pizzaname = 'Peperoni';
    }
    if ($pizzacost == '20') {
        $pizzaname = 'Vilage';
    }
    if ($pizzacost == '30') {
        $pizzaname = 'Hawai';
    }
    if ($pizzacost == '40') {
        $pizzaname = 'Mashrooms';
    }
$pizzasize = $_POST['sizeselect'];

    if ($pizzasize == '21') {
        $pizzasizecost = 0;
    }
    if ($pizzasize == '26') {
        $pizzasizecost = 6;
    }
    if ($pizzasize == '31') {
        $pizzasizecost = 9;
    }
    if ($pizzasize == '45') {
        $pizzasizecost = 12;
    }

$summa = (int)$pizzacost + $pizzasizecost;
$souse = $_POST['souseselect'];
$output = '';
$output .= "<h2>ЗАКАЗ ПРИНЯТ!</h2><br>";
$output .= "Ваш заказ: <br>";
$output .= "Пицца " . $pizzaname . " стоимостью(21 см) <b>" . $pizzacost . " руб.</b><br>";
$output .= "Размер пиццы <i>" . $pizzasize . " см</i> + <b>" . $pizzasizecost . " руб.</b> к стоимости <br>";
    if ($souse == "no") {
        $output .= "Без соуса <br>";
    } else {
        $output .= "С соусом " . $souse . "<br>";
    };
$output .= "Всего к оплате <b>" . $summa . " руб.</b>";
echo $output;
?>