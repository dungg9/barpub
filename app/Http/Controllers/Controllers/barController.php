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
    public function thembar()
    {
        $arrquanbar=quanbarModel::getAll();
    	return view("thembar",["arrquanbar"=>$arrquanbar]);
    }
    public function thembarProcess(Request $request)
    {
    	$objbar=new barModel();
    	$objbar->maquanbar=$request->txtmaquanbar;
    	$objbar->tenquanbar=$request->txttenquanbar;
    	$objbar->diachi=$request->txtdiachi;
    	barModel::insertbar($objbar);
    	//quay tro ve trang listban
    	return redirect()->route("index");
    }
    public function xoabar(Request $request)
    {

        $maquanbar=$request->maquanbar;
        barModel::deletebar($maquanbar);
        return redirect()->route("index");
    }
    public function suabar(Request $request)
    {
        $maquanbar=$request->maquanbar;
        $objbar=barModel::getById($maquanbar);
        $arrquanbar=quanbarModel::getAll();
        return view("suabar",["objbar"=>$objbar,"arrquanbar"=>$arrquanbar]);
    }
    public function suabarProcess(Request $request)
    {
        $objban=new barModel();
        $objbar->maquanbar=$request->txtmaquanbar;
        $objbar->tenquanbar=$request->txttenquanbar;
        $objbar->diachi=$request->txtdiachi;
        $objbar->updatebar();
        return redirect()->route("index");
    }
}
