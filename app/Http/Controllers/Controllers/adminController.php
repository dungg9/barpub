<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\studentModel;
use App\classModel;
use App\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $listAdmin = adminModel::getAllAdmin();
        return view('admin/listAdmin',array(
            "listAdmin"=>$listAdmin
        ));
    }

    public function create()
    {
        $listClass = classModel::getAll();
        return view ('admin/insertAdmin',array(
            "listClass"=>$listClass
        ));
    }

    public function edit($id)
    {
        $admin = new adminModel();
        $result = $student->getbyId($id);
        $listAdmin = classModel::getAll();
        return view('admin/updateAdmin',array(
            "admin"=>$result,
            "listClass"=>$listClass
        ));
    }

    public function update(Request $request)
    {
        $admin = new adminModel();
        $admin->tenadmin=$request->tenadmin;
        $admin->gioitinh=$request->gioitinh;
        $admin->ngaysinh=$request->ngaysinh;
        $admin->sdt=$request->sdt;
        $admin->email=$request->email;
        $admin->updateAdmin($admin);
        return redirect('admin/listAdmin');
    }

    public function destroy($id);
    {
        adminModel::deleteAdmin($id);
        return redirect('admin/listAdmin');
    }

}
