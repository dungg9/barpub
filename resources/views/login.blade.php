    @if(session()->has("thongbao"))
    	{{session()->get("thongbao")}}
    @endif
    <div class="container">
        <form method="POST" action="">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            Username
                <input type="text" name="txtusername"><br>
            Password
                <input type="password" name="txtpassword"><br>
            <input type="submit" value="LOGIN">
        </form>
    </div> 
