<!DOCTYPE html>
<html>
<head>
    <title>Login Form Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('AdminLTE/dist/css/stylelogin.css')}}">
    <link rel="stylesheet" href="{{url('AdminLTE/dist/css/stylelogin2.css')}}">
</head>
<body style="background-color: silver">
<section>
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    @if(session('gagal'))
                    <script>
                        Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Masuk',
                        text:'Selamat Datang',
                        showConfirmButton: false,
                        timer: 1500
                        })
                        </script>
                    @endif
                    <div class="myLeftCtn">
                        <form class="myForm text-center" action="/postlogin" method="post">
                            @csrf
                            <header>Sign in to start your session</header>
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email" type="text" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" id="password" name="password" placeholder="Password" required>
                            </div>

                            {{-- <div class="form-group">
                                <label>
                                    <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to Terms & Conditions</small></input>
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div> --}}
                            <div class="form-group">
                                <i class="fas fa-sign-in-alt"></i>
                                <button type="submit" class="butt">Sign In</button>
                            </div>
                        </form>
                            <center>
                            <a href="forgot-password.html">I forgot my password</a>
                            </center>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box ">
                                <center>
                                <img
                                src="{{url('AdminLTE/dist/img/stmik.png')}}"
                                alt=""
                                style="opacity: 0.8;width:23%"
                              />


                                <header style="font-size:30px">PMB STMIK SUMEDANG</header>
                                <h5>For a Better Future</h5>
                                </center>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.</p>

                                {{-- <input type="button" class="butt_out" value="Learn More"/> --}}
                            </div>

                    </div>
                </div>
            </div>
        </div>
</div>
</section>


</body>
</html>

