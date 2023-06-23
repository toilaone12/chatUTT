@extends('dashboard')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Thông tin tài khoản</div>
                    <?php

                    use Illuminate\Support\Facades\Session;
                    $message = Session::get('message');
                    if(isset($message)){
                        echo $message;
                        Session::put('message', '');

                    }
                    ?>
                    <div class="card-body">
                        <form method="POST" action="{{route('user.changePassword')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <!-- Form Group (username)-->
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Họ và tên</label>
                                    <input class="form-control" id="inputFirstName" name="fullname" value="{{$user->name}}" type="text" placeholder="Nhập tên">
                                    @error('fullname')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Tên đăng nhập</label>
                                    <input class="form-control" id="inputLastName" name="username" value="{{$user->username}}" type="text" placeholder="Nhập tên đăng nhập">
                                    @error('username')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-4">
                                    <label class="small mb-1" for="inputPhone">Mật khẩu</label>
                                    <div class="input-group mb-0" id="show_hide_password">
                                        <input class="form-control rounded-start password" name="password" type="password" placeholder="Nhập mật khẩu">
                                        <div class="input-group-addon d-flex align-items-center px-2 rounded-end open-password" style="cursor:pointer">
                                            <i class="fa fa-eye-slash icon-password" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-4">
                                    <label class="small mb-1" for="inputBirthday">Nhập lại mật khẩu</label>
                                    <div class="input-group mb-0" id="show_hide_password">
                                        <input class="form-control rounded-start re-password" name="re-password" type="password" placeholder="Nhập lại mật khẩu">
                                        <div class="input-group-addon d-flex align-items-center px-2 rounded-end open-re-password" style="cursor:pointer">
                                            <i class="fa fa-eye-slash icon-re-password" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    @error('re-password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label class="small mb-1" for="inputBirthday">Mã bảo mật</label>
                                    <input class="form-control" id="inputBirthday" type="tel" value="{{$user->remember_token}}" name="otp" placeholder="Nhập mã bảo mật">
                                    @error('otp')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary rounded" type="submit">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection