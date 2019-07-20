<p style="font-size: 18px">LOGIN</p>
@if(session()->has("thongbao"))
    {{session()->get("thongbao")}}
@endif
<form method="POST" action="">
    TÊN <input type="text" name="txtkh"><br>
    USERNAME <input type="text" name="txtusername"><br>
    PASSWORD <input type="text" name="txtpassword"><br>
    GIỚI TÍNH   <input type="radio" name="rdbgioitinh" value="1">Nam
                <input type="radio" name="rdbgioitinh" value="0">Nu
</form>