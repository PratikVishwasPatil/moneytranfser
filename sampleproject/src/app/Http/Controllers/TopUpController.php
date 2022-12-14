<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Transfer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TopUpController extends Controller
{
    //
    public function topup(Request $request)
    {
        // echo '<pre>';
        // print_r($request);
        // echo '</pre>';
        $Customer = new Customer;
        $Customer->amount = $request['amount'];
        $Customer->save();
        return redirect('/dashboard')->with('status', 'data inserted!');
    }


    public function sendmoney()
    {
        // return "hello";
        return view('sendmoney');
    }

    public function sendmoneyto(Request $request)
    {
        // return "hello";
        // return view('sendmoney');
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // die;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'amount' => 'required|max:4',
        ]);
        
        // echo (auth()->id());
        // die();
        $transfer = new Transfer;
        $transfer->name = $request['name'];
        $transfer->email = $request['email'];
        $transfer->amount = $request['amount'];
        $transfer->save();

        return redirect('/dashboard')->with('status', 'data inserted!');
    }

    public function transactionlist()
    {
        // $transactions = Transfer::all();
        // $data = compact('transactions');
        // return view('Transactionlist')->with($data);

        // $transfers = DB::table('transfers')->where('id', auth()->id())->get();
        // echo '<pre>';
        // print_r($Customers->all());
        // echo '</pre>';
        // die;
        // $data = compact('transfers');
        // return view('Transactionlist')->with($data);
        // die;
        $data = DB::table('transfers')
            ->where('transaction_id', auth()->id())
            ->get();
        // echo (auth()->id());

        // echo '<pre>';
        // print_r($data->all());
        // echo '</pre>';
        // die;

        return view('Transactionlist', ['data' => $data]);
    }

    public function showwalletbalance()
    {
        // return "hello";
        // $Customers = Customer::all();
        // $data = compact('Customers');
        // return view('showwallet')->with($data);

        // $Customers = DB::table('customers')->where('customers_id', auth()->id())->get();
        // echo '<pre>';
        // print_r($Customers->all());
        // echo '</pre>';
        // die;
        // $data = compact('Customers');
        // return view('showwallet')->with($data);
        // echo (auth()->id());

        $data = DB::table('customers')
            ->where('customers_id', auth()->id())
            ->get();

        //    echo '<pre>';
        //     print_r($data->all());
        //     echo '</pre>';
        //     die; 
        return view('showwallet', ['data' => $data]);
    }
}
