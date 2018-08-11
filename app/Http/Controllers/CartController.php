<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Menu;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $product_id){
        //Получаем добавляемый продукт в корзину по id
        $product = Product::find($product_id);
        /*Проверяем налииче корзины в сессии (массив данных )
            array( items = array(
                           //Id продукта
                        id = ( qty - кол-во данного продукта
                               price - общую сумму данного продукта
                               item - сам продукт экземпляр)
                    ) - список товаров,
                   totalQty - общее кол-во
                   totalPrice - Сумма )
        */
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        //Cоздается экземпляр объекта из массива данных
        $cart = new Cart($oldCart);
        //Добалвение товара в корзину
        $cart->add($product, $product->id);
        //Кладем в сессию нашу корзину в сериализованном виде
        $request->session()->put('cart', $cart);
        return redirect()->route('home');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getCart(){
        if(!Session::has('cart')){
            $menus = Menu::all();
            return view('shop.cart', [
                'menus' => $menus,
            ]);
        }

        $oldCart = Session::get('cart');

        // dd($oldCart);

        $cart = new Cart($oldCart);

        //dd($cart);

        $menus = Menu::all();

        return view('shop.cart',
            [
                'products' => $cart->items,
                'totalPrice' => $cart->totalPrice,
                'menus' => $menus,
            ]
        );
    }
}
