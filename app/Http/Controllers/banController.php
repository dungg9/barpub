<?php

namespace App\Http\Controllers;
use App\banModel;
use App\barModel;
use App\quanbarModel;
use Illuminate\Http\Request;

class banController extends Controller
{
    //
    public function getAll()
    {

    	//goi len model de lay mang ban
    	$arrban=banModel::getAll();
    	//nem len view de hien thi
    	return view("listban",["arrban"=>$arrban]);
    }
    public function getById($idbar)
    {
        $arrquanbar=barModel::getById($idbar);
        return view("listban",["arrquanbar"=>$arrquanbar]);
    }
    // public function themban()
    // {
    //     $arrquanbar=quanbarModel::getAll();
    // 	return view("themban",["arrquanbar"=>$arrquanbar]);
    // }
    // public function thembanProcess(Request $request)
    // {
    // 	$objban=new banModel();
    // 	$objban->maban=$request->txtmaban;
    // 	$objban->tenban=$request->txttenban;
    // 	$objban->soluong=$request->txtsoluong;
    // 	$objban->tenloai=$request->ddlloai;
    //     $objban->tenquanbar=$request->ddlquanbar;
    // 	banModel::insertban($objban);
    // 	//quay tro ve trang listban
    // 	return redirect()->route("listban");
    // }
    // public function xoaban(Request $request)
    // {

    //     $maban=$request->maban;
    //     banModel::deleteban($maban);
    //     return redirect()->route("listban");
    // }
    // public function suaban(Request $request)
    // {
    //     $maban=$request->maban;
    //     $objban=banModel::getById($maban);
    //     $arrquanbar=quanbarModel::getAll();
    //     return view("suaban",["objban"=>$objban,"arrquanbar"=>$arrquanbar]);
    // }
    // public function suabanProcess(Request $request)
    // {
    //     $objban=new banModel();
    //     $objban->maban=$request->txtmaban;
    //     $objban->tenban=$request->txttenban;
    //     $objban->soluong=$request->txtsoluong;
    //     $objban->maloai=$request->ddlloai;
    //     $objban->maquanbar=$request->ddlquanbar;
    //     $objban->updateban();
    //     return redirect()->route("listban");
    // }
}
