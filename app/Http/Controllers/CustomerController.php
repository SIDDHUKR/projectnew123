<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    function addcustomer(Request $req){
        $customers= new Customers();
        $customers->id=null;
        $customers->name=$req->name;
        $customers->email=$req->email;
        $customers->number=$req->number;
        $customers->text=$req->text;
        $customers->save();
        return redirect('/');

    }

    function showitems(){
        $customers= Customers::all();
        return view('/datashow',['customers'=>$customers]);
    }

    // function deleteitems(){
    //     $customers=Customers::find($);
    //     $customers->delete();
    //     return redirect('/datashow');

    // }
}

