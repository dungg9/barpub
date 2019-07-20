<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    //
    static function getAll()
    {
    	$sql="select * from tblkhachhang";
    	$arrcontact=DB::select($sql);
    	return $arrcontact;
    }
    static function insert($obj)
    {
    	DB::insert("insert into tbl)");
    }
}
