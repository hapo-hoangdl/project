@extends('layouts.master')
@section('content')

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Thêm thành viên</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Enter name" value="{{ old('name') }}">
                        @error('name')
                            <strong class="alert text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" autocomplete="current-password" placeholder="Enter password">
                        @error('password')
                             <strong class="alert text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tài khoản</label>
                        <input type="text" class="form-control" name="account" autocomplete="off" placeholder="Enter account" value="{{ old('account') }}">
                        @error('account')
                            <strong class="alert text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Avatar</label>
                        <input type="file" class="form-control" name="image" autocomplete="off">
                        @error('image')
                            <strong class="alert text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Enter email" value="{{ old('email') }}">
                        @error('email')
                            <strong class="alert text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Quyền</label>
                        <select name="is_admin">
                            @foreach(App\Models\Member::IS_ADMIN as $key => $label)
                                <option value="{{ $key }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <a href="{{ route('members.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
