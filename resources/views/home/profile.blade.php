@extends('home')
@section('content')
<div class="container mt-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item active title" aria-current="page">{{$titlePage}}</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-lg-4">
      <ul class="list-group">
        <li class="list-group-item click-profile active">Thông tin cá nhân</li>
        <li class="list-group-item click-change-password">Thay đổi mật khẩu</li>
      </ul>
    </div>
    <div class="col-lg-8 profile">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{($oneCustomer->image_customer == '') ? 'asset("fe/image/person.png")' : $oneCustomer->image_customer}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{$oneCustomer->name_customer}}</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Họ và tên</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$oneCustomer->name_customer}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Giới tính</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{($oneCustomer->gentle_customer == 0 ? 'Nam' : 'Nữ')}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Ngày sinh</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{date('d/m/Y',strtotime($oneCustomer->birthday_customer))}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$oneCustomer->email_customer}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Số điện thoại</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{($oneCustomer->phone_customer == null ? 'Không có' : $oneCustomer->phone_customer)}}</p>
                </div>
              </div>
              <hr>
              <button class="btn btn-primary rounded change-profile" type="submit">Chỉnh sửa</button>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-8 upgrade-profile d-none">
      <div class="card mb-4">
        <div class="card-header">Thay đổi thông tin cá nhân</div>
        <div class="card-body">
            @csrf
            <input type="hidden" name="id" value="">
            <!-- Form Row-->
            <div class="row gx-3 mb-3">
              <!-- Form Group (phone number)-->
              <div class="col-md-4">
                <label class="small mb-1" for="inputPhone">Họ và tên</label>
                <div class="input-group mb-3">
                  <input type="text" name="fullname" class="form-control fullname" placeholder="Họ tên">
                </div>
                @error('fullname')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <!-- Form Group (birthday)-->
              <div class="col-md-4">
                <label class="small mb-1" for="inputBirthday">Giới tính</label>
                <div class="input-group mb-3">
                  <select name="gentle" id="" class="form-control gentle">
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                  </select>
                </div>
                @error('gentle')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <label class="small mb-1" for="inputBirthday">Số điện thoại</label>
                <div class="input-group mb-3">
                  <input type="number" name="phone" class="form-control phone" placeholder="Số điện thoại">
                </div>
                @error('birthday')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="row gx-3 mb-3">
              <!-- Form Group (phone number)-->
              <div class="col-md-6">
                <label class="small mb-1" for="inputPhone">Ngày sinh</label>
                <div class="input-group mb-3">
                  <input type="date" name="birthday" class="form-control birthday" placeholder="Ngày tháng năm sinh">
                </div>
                @error('birthday')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <!-- Form Group (birthday)-->
              <div class="col-md-6">
                <label class="small mb-1" for="inputBirthday">Email</label>
                <div class="input-group mb-3">
                  <input type="email" name="birthday" class="form-control email" placeholder="Email">
                </div>
                @error('birthday')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
            <!-- Save changes button-->
            <button class="btn btn-primary rounded update-profile" type="submit">Cập nhật</button>
        </div>
      </div>
    </div>
    <div class="col-lg-8 d-none change-password">
      <div class="card mb-4">
        <div class="card-header">Thay đổi mật khẩu</div>
        <div class="card-body">
          <input type="hidden" name="id" value="">
          <!-- Form Row-->
          <div class="row gx-3 mb-3">
            <!-- Form Group (phone number)-->
            <div class="col-md-6">
              <label class="small mb-1" for="inputPhone">Mật khẩu</label>
              <div class="input-group mb-3">
                <input type="password" id="passwordInput" name="password" class="form-control border-secondary" placeholder="Mật khẩu">
                <div class="input-group-append">
                  <button type="button" id="showPasswordButton" class="btn btn-outline-secondary eye-password">
                    <i id="showPasswordIcon" class="fas fa-eye icon-password"></i>
                  </button>
                </div>
              </div>
              @error('password')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <!-- Form Group (birthday)-->
            <div class="col-md-6">
              <label class="small mb-1" for="inputBirthday">Nhập lại mật khẩu</label>
              <div class="input-group mb-3">
                <input type="password" name="re-password" id="rePasswordInput" class="form-control border-secondary" placeholder="Nhập lại mật khẩu">
                <div class="input-group-append">
                  <button type="button" id="showPasswordButton" class="btn btn-outline-secondary eye-re-password">
                    <i id="showPasswordIcon" class="fas fa-eye icon-re-password"></i>
                  </button>
                </div>
              </div>
              @error('re-password')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>
          <!-- Save changes button-->
          <button class="btn btn-primary rounded update-password" type="submit">Cập nhật</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection