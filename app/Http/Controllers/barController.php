<?php

namespace App\Http\Controllers;
use App\barModel;
use App\quanbarModel;
use Illuminate\Http\Request;

class barController extends Controller
{
    //
    public function getAll()
    {

    	//goi len model de lay mang ban
    	$arrbar=barModel::getAll();
    	//nem len view de hien thi
    	return view("index",["arrbar"=>$arrbar]);
    }
   
}
