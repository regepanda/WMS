@extends("base")
<link rel="stylesheet" type="text/css" href="/style/style.css" />
@section("body")
    <div class="bgi_div">
        <img class="full_image" src="/image/bg_2.jpg">
    </div>
    <div class="container">
        <section id="content">
            <form action="_admin_login" method="post">
                <h1>管理员登录</h1>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <input type="text" placeholder="管理员名(admin1)" required="" name="user_username" />
                </div>
                <div>
                    <input type="password" placeholder="密码(123)" required="" name="user_password" />
                </div>
                <div>
                    <input type="submit" value="登录" />
                    <a href="#">忘记密码?</a>
                </div>
            </form>
        </section>
    </div>
@stop