<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    //
    public function adminp()
    {
        // $data = DB::select("SELECT (SELECT COUNT(*) FROM users ) as users_count, (SELECT COUNT(*) FROM customers) as customers_count, (SELECT COUNT(*) FROM transfers) as transfers_count");
        return view('adminpanel');
        //  echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // return view('adminpanel', ['data' => $data]);
    }

    public function dashboard1()
    {
        $data = DB::select("SELECT (SELECT COUNT(*) FROM users ) as users_count, (SELECT COUNT(*) FROM customers) as customers_count, (SELECT COUNT(*) FROM transfers) as transfers_count");
        // return view('adminpanel');
        //  echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        return view('dashboard1', ['data' => $data]);
    }

    public function registercustomer()
    {
        $registers = DB::table('users')
            ->join('customers', 'users.id', '=', 'customers.customers_id')
            ->get();

        // echo "<pre>";
        // print_r($registers);
        // echo "</pre>";

        return view('registeredcustomers', ['registers' => $registers]);

        // return view('registeredcustomers');
    }

    public function customerdetails()
    {
        $customers = DB::table('users')
            ->join('customers', 'users.id', '=', 'customers.customers_id')
            ->join('transfers', 'transfers.transaction_id', '=', 'users.id')
            ->get();
        // echo"<pre>";
        // print_r($registers);
        // echo"</pre>";
        return view('customerdetails', ['customers' => $customers]);

        // return view('customerdetails');
    }

    public function transactionlist1()
    {
        // $transactions=new Transfer;
        //  echo"<pre>";
        // print_r($transactions);
        // echo"</pre>";
        // die;
        // $data=compact('transactions');
        // return view('transactionlist1')->with($data);
        $transactions = DB::table('transfers')
            // ->where('customers_id', auth()->id())
            ->get();

        //    echo '<pre>';
        //     print_r($data->all());
        //     echo '</pre>';
        //     die; 
        return view('transactionlist1', ['transactions' => $transactions]);
    }

    public function viewdetail($id)
    {
        $registers = DB::table('users')
            ->join('customers', 'users.id', '=', 'customers.customers_id')
            ->where('users.id', $id)
            ->get();

        // echo "<pre>";
        // print_r($registers);
        // echo "</pre>";

        return view('viewdetail', ['registers' => $registers]);
    }

    
}
