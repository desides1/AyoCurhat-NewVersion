<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>
    <link rel="stylesheet" href="assets/css/style_register.css" />
    <link rel="icon" href="../images/logo.png">
</head>

<body>
    <div class="card-container">
        <div class="right">
            <form action="" method="post" autocomplete="off">
                @csrf
                <h4> Register</h4>
                <div class="input-box">
                    <label for="nama">Nama</label>
                    <input type="text" placeholder="masukkan nama" name="nama" id="nama"
                        class="form-control @error('nama')
                        is-invalid @enderror" id="nama"
                        required />
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-box">
                    <label for="prodi">Nim</label>
                    <input type="text" placeholder="masukkan nim" name="nim"
                        class="form-control @error('nim')
        is-invalid @enderror" id="nim" required />

                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="masukkan email" name="email"
                        class="form-control @error('email')
        is-invalid @enderror" id="email" required />
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Masukkan password" name="password"
                        class="form-control @error('password')
        is-invalid @enderror" id="password" required />
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="input-box">
                    <label for="prodi">Konfirmasi password</label>
                    <input type="password" placeholder="konfirmasi password" name="password_confirmation"
                        class="form-control @error('confirm')is-invalid @enderror" id="password" required />
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="input-box">
                    <label for="ktm">Upload Kartu Tanda Mahasiswa</label>
                    <input type="file" placeholder="" name="ktm"
                        class="form-control
                                @error('ktm')is-invalid @enderror"
                        id="ktm" required>
                </div>

                <div class="note">
                    <p>apakah anda sudah punya akun? <a href="">log in</a></p>
                </div>
                <div class="button-register">
                    <button class="register-button" type="submit">Register</button>
                </div>
            </form>


        </div>

    </div>


</body>

</html>
