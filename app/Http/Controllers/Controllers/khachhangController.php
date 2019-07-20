<?php

namespace App\Http\Controllers;
use App\Model;
use App\khachhangModel;
use Illuminate\Http\Request;

class khachhangController extends Controller
{
    //
    public function getAll()
    {

    	//goi len model de lay mang ban
    	$arrkhachhang=khachhangModel::getAll();
    	//nem len view de hien thi
    	return view("listkh",["arrkhachhang"=>$arrkhachhang]);
    }
}