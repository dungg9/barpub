<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class banModel extends Model
{
    //
    static function getAll()
    {
    	$sql="SELECT maban, tenban, soluong, tenloai, tenquanbar FROM tblban INNER JOIN tblloaiban ON tblloaiban.maloai = tblban.maloai INNER JOIN tblquanbar ON tblquanbar.maquanbar = tblban.maquanbar
        WHERE tblquanbar.maquanbar="$idbar";
    	$arrban=DB::select($sql);
    	return $arrban;
    }
    static function insertban($objban)
    {
    	DB::insert("insert into tblban values($objban->maban,'$objban->tenban','$objban->soluong',$objban->maloai,$objban->maquanbar)");
    }
    static function deleteban($id)
    {
        DB::delete("delete from tblban where maban=$id");
    }
    static function getById($id)
    {
        $arr=DB::select("select * from tblban where maban=$id");
        return $arr[0];
    }
    function updateban()
    {
        DB::update("update tblban set tenban=?,soluong=$this->soluong,maloai='$this->maloai',maquanbar=$this->maquanbar where maban=$this->maban",[$this->tenban]);
    }
}
