
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,x initial-scale=1.0">
    <link rel="icon" href="https://www.polban.ac.id/wp-content/uploads/2017/10/LOGO-gram.png" sizes="10x10" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Politeknik Negeri Bandung - assuring your future</title>
</head>
<body>
    <div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-4 col-md-4 col-sm-3 hidden-xs"></div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                <div id="logo-polban" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{ asset('images/logo-web-polban.png') }}" width="80%">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div id="login-wrapper" class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    <form id="login-form" action="a" method="POST" autocomplete="off">
                        <div class="row" id="login-content">
                            <div class="col-md-12">
                                <input class="form-control input-login" type="text" placeholder="Username" name="usename" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control input-login" type="password" placeholder="Password" name="password" required>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control btn-primary input-login" type="submit" value="Masuk">
                            </div>
                        </div>
                    </form>
                    <h4>Atau</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="localhost:8000" class='form-control btn-disabled input-login no-underline-hover'>Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            </div>
        <div class="col-lg-4 col-md-4 col-sm-3 hidden-xs"></div>
    </div>
</body>
</html>