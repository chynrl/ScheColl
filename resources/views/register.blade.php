<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">FORM REGISTER USER</h3>
            <hr>
            {{-- peringatan kesalahan --}}
            @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif
            <form action="{{route('actionregister')}}" method="post">
            @csrf
                {{-- form pengisian --}}
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ old('name') }}" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}"required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-address-book"></i> Role</label>
                    <select name="role" class="form-control" required>
                        <option value="admin" {{old('role')== "admin" ? 'selected':''}}>Admin</option>
                        <option value="mahasiswa" {{old('role')=="mahasiswa" ? 'selected':''}}>Mahasiswa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Kode Akses Admin *isi jika mendaftar sebagai admin</label>
                    <input type="password" name="kode_akses_admin" class="form-control" placeholder="Kode Akses Admin">
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Register</button>
                <hr>
                <p class="text-center">Sudah punya akun silahkan <a href="{{route('login')}}">Login Disini!</a></p>
            </form>
        </div>
    </div>
</body>
</html>