<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Main Page</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-3"></div>
            <div class="col-md-6 card p-3"> 
                <h4>فرم ثبت نام</h4>               
                <br>
                <form action="{{ route('user.store') }}" method="post" class="form-group">
                    @csrf
                    <label for="mobile">موبایل</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" required>
                    <br>

                    <label for="email">ایمیل</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <br>

                    <label for="password">رمز عبور</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <br>

                    <input class="btn btn-success" type="submit" name="register" id="register" value="ثبت نام">                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>