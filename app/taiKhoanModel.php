<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class taiKhoanModel extends Model
{
    //
    public function checklogin()
    {
        $arr=DB::select("select * from tblkhachhang where username='$this->username' and password='$this->password'");
        return count($arr);
    }
}
