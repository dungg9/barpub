<?php

namespace App\Http\Controllers;
use App\Model;
use App\dangkiModel;
use Illuminate\Http\Request;

class dangkiController extends Controller
{
    public function dangki()
    {
        $arrdangki=dangkiModel::getAll();
    	return view("dangki",["arrdangki"=>$arrdangki]);
    }
    public function dangkiProcess(Request $request)
    {
    	$objdangki=new khachhangModel();
    	$objdangki->makhachhang=$request->txtmakh;
    	$objdangki->tenkhachhang=$request->txttenkh;
    	$objdangki->username=$request->txtusername;
    	$objdangki->password=$request->txtpassword;
        $objdangki->gioitinh=$request->rdbgioitinh;
        $objdangki->ngaysinh=$request->ngaysinh;
        $objdangki->sdt=$request->txtsdt;
        $objdangki->email=$request->txtemail;
    	khachhangModel::insertkh($objdangki);
    	return redirect()->route("listban");
    }
}