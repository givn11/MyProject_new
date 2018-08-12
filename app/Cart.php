<?php

namespace App;


class Cart
{
    public $items = null; //хранит объекты покупаемых товаров
    public $totalQty = 0; //Итоговое количество товаров в корзине
    public $totalPrice = 0; //Итоговая сумма товаров в корзине

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function add(Product $product, $id){
        //Шаблон того как хранится определнный продукт в корзине
        $storedItem = [
            'qty' => 0,
            'price' => $product->price,
            'item' => $product
        ];
        //Происходит проверка на существование данного товара в корзине $this->items
        //Если товар уже есть, то перезаписываем наш шаблон данными из корзины
        //по id добавляемого товара ($times[$id])
        //Иначе двигаем далее
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        //Увеличиваем количество на 1
        $storedItem['qty']++;
        $storedItem['price'] = $product->price * $storedItem['qty'];

        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $product->price;
        //dump($this->totalPrice);
    }

    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];

        if($this->items[$id]['qty'] <= 0){
            unset($this->items[$id]);
        }
    }

    public function increaseByOne($id){
        $this->items[$id]['qty']++;
        $this->items[$id]['price'] += $this->items[$id]['item']['price'];
        $this->totalQty++;
        $this->totalPrice += $this->items[$id]['item']['price'];
    }

    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function clear(){
        $this->totalQty = 0;
        $this->totalPrice = 0;
        $this->items = [];
    }
}
