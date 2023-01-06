@section('jsplugin')
    <script src="{{asset('assets/js/plugins/buttons/spin.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/buttons/ladda.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/notifications/pnotify.min.js')}}"></script>
@endsection
@section('jsscript')
    <script src="{{asset('assets/js/login.js')}}"></script>
@endsection
<!DOCTYPE html>
<html lang="en">
    <x-head page="Masuk" />
    <body class="bg-secondary">
        <div class="page-content">
            <div class="content-wrapper">
                <div class="content-inner">
                    <div class="content d-flex justify-content-center align-items-center">
                        <form class="login-form">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <img src="{{asset(\App\Models\Setting::content('logoIcon'))}}" style="width: 50%" alt="logo" />
                                        <h5 class="mb-0">Halaman Administrator</h5>
                                        <span class="d-block text-muted">{{\App\Models\Setting::content('appname')}}</span>
                                    </div>
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" class="form-control" placeholder="Nama Pengguna" id="email">
                                        <div class="form-control-feedback">
                                            <i class="icon-user text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="password" class="form-control" placeholder="Kata Sandi" id="password">
                                        <div class="form-control-feedback">
                                            <i class="icon-lock2 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" id="remember" class="custom-control-input" checked>
                                            <span class="custom-control-label">Ingat Saya</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block btn-ladda btn-ladda-spinner" data-style="expand-left" data-spinner-color="#333" data-spinner-size="20" id="button">
                                            <span class="ladda-label">MASUK</span>
                                        </button>
                                    </div>

                                    <span class="form-text text-center text-muted">Dengan melanjutkan, Anda mengonfirmasi bahwa Anda telah membaca <a href="#">Syarat &amp; Ketentuan </a> dan <a href="#">Kebijakan Cookie kami</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
