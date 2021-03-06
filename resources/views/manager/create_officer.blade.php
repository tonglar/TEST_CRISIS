@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">สร้างผู้ใช้ระบบ</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('manager.register_cfm') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label">UserName</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required >

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                                <label for="tel" class="col-md-4 control-label">Telephone Number</label>

                                <div class="col-md-6">
                                    <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}" required >

                                    @if ($errors->has('tel'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position" class="col-md-4 control-label">ตำแหน่ง</label>

                                <div class="col-md-6">
                                    <select id ="position" name="position">
                                        <option value="officer"  >เจ้าหน้าที่</option>
                                        @if(   Auth::user()->position  == "admin")
                                            <option value="manager"  >เจ้าหน้าประจำจังหวัด</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prov" class="col-md-4 control-label">รหัสจังหวัด</label>

                                <div class="col-md-6">
                                    <select style='width:200px' name="prov_id" id="prov_id">
                                        @foreach($provinces as $province)
                                            @if ( Auth::user()->prov_id == $province->PROVINCE_CODE And Auth::user()->position  == "manager")
                                            <option value="{{ $province->PROVINCE_CODE }}" style="width:250px">{{ $province->PROVINCE_NAME }}</option>
                                            @elseif(   Auth::user()->position  == "admin")
                                                <option value="{{ $province->PROVINCE_CODE }}" style="width:250px">{{ $province->PROVINCE_NAME }}
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        สร้างผู้ใช้ระบบ
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
