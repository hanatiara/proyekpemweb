<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart', []);

        // dd($cart);
        $data = [
            'cart' => $cart,
            'total_items' => sizeof($cart),
            'total_price' => $this->getTotal(),
        ];
        return view('landing.cart', $data);

    }

    public function checkout() {
        $cart = session()->get('cart', []);

        $name = DB::table('users')->where('id', Auth::id())->get()->first()->name;
        // dd($name);

        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'fullname' => $name,
            'total_amount' => $this->getTotal(),
            'status' => 'success',

        ]);

        // dd($transaction);
        session()->forget('cart');
        return view('landing.checkout');


    }


    public function getItems() {

    }

    public function getTotal() {
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'];
        }
        return $total;
    }

    public function addQuantity($id) {
        $cart = session()->get('cart', []);
        $cart[$id]['quantity']++;
        $cart[$id]['price'] = $cart[$id]['price']*$cart[$id]['quantity'];
        session()->put('cart', $cart);
        return redirect(route('landing.cart'));
    }

    public function decQuantity($id) {
        $cart = session()->get('cart', []);
        if($cart[$id]['quantity'] == 1) {
            return redirect('/cart/delete/'.$id);
        }

        $cart[$id]['quantity']--;
        $cart[$id]['price'] = $cart[$id]['price']*$cart[$id]['quantity'];
        session()->put('cart', $cart);
        return redirect(route('landing.cart'));
    }

    public function addItems($id) {
        $items = DB::table('category')->where('id_category', $id)->get()->first();

        // dd($items->id_category);

        $cart = session()->get('cart', []);

        if(isset($cart[$items->id_category])) {
            $cart[$items->id_category]['quantity']++;
            $cart[$id]['price'] = $cart[$id]['price']*$cart[$id]['quantity'];
        } else {
            $cart[$items->id_category] = [
                "id" => $items->id_category,
                "name" => $items->title,
                "quantity" => 1,
                "price" => $items->price,
                "image" => $items->image
            ];
        }



        session()->put('cart', $cart);
        // add notification success
        // dd(session());
        return redirect(route('landing.kategori'))->with('success', 'Product added to cart.');
    }

    public function deleteItems($id) {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect(route('landing.cart'));
    }


}
