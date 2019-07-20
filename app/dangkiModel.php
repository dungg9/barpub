<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class dangkiModel extends Model
{
    static function insertkh($objdangki)
    {
    	DB::insert("insert into tblkhachhang values($objdangki->makhachhang,'$objdangki->tenkhachhang','$objdangki->username','$objdangki->password',$objdangki->gioitinh,$objdangki->ngaysinh,$objdangki->sdt,$objdangki->email,'')");
    }
}