<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class adminModel extends Model
{
    static function getAllAdmin()
    {
        $listAdmin = DB::table('tbladmin')
        ->select('tenadmin','gioitinh','ngaysinh','sdt','email')
        ->get();
    return $listAdmin;
    }

    function insert($admin)
    {
        DB::table('tbladmin')
        ->insert([
            'tenadmin'=>$admin->tenadmin,
            'username'=>$admin->username,
            'password'=>$admin->password,
            'gioitinh'=>$admin->ngaysinh,
            'sdt'=>$admin->sdt,
            'email'=>$admin->email,
            
        ]);
    }

    function getById($id)
    {
        $admin = DB::table('tbladmin')
        ->where('maadmin',$id)->get();
        return $admin;
    }

    function updateAdmin($admin)
    {
        DB:table('tbladmin')
        ->where('maadmin',$admin->maadmin)
        ->update([
            'tenadmin'=>$admin->tenadmin,
            'gioitinh'=>$admin->gioitinh,
            'sdt'=>$admin->sdt,
            'email'=>$admin->email,
            ])
    }

    function deleteAdmin($id)
    {
        DB::table('tbladmin')->where('maadmin',$id)->delete();
    }

}

