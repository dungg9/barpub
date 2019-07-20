<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class barModel extends Model
{
    //
    static function getAll()
    {
    	$sql="select * from tblquanbar";
    	$arrbar=DB::select($sql);
    	return $arrbar;
    }
    static function insertbar($objban)
    {

    	DB::insert("insert into tblquanbar values($objbar->maquanbar,'$objbar->tenquanbar','$objbar->diachi')");
    }
    static function deletebar($id)
    {
        DB::delete("delete from tblquanbar where maquanbar=$id");
    }
    static function getById($id)
    {
        $arr=DB::select("select * from tblquanbar where maquanbar=$id");
        return $arr[0];
    }
    function updatebar()
    {
        DB::update("update tblquanbar set tenquanbar=?,diachi=$this->diachi where maquanbar=$this->maquanbar",[$this->tenquanbar]);
    }
}
