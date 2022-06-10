@extends('layouts.app')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">Kayıt Ol</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="register">
        <div class="container">
            <div class="register-top heading">
                <h2>KAYIT OL</h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                {{csrf_field()}}
                <div class="register-main">
                <div class="col-md-6 account-left">
                    <input class="{{$errors->has('UyeAdi') ? 'is-invalid' : ''}}" name="UyeAdi" value="{{ old('UyeAdi') }}" placeholder="İsim" type="text" tabindex="1" required>
                    @if($errors->has('UyeAdi'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('UyeAdi')}}</strong>
                    </span>
                    @endif
                    <input class="{{$errors->has('UyeSoyadi') ? 'is-invalid' : ''}}" name="UyeSoyadi" value="{{ old('UyeSoyadi') }}" placeholder="Soyisim" type="text" tabindex="2" required>
                    @if($errors->has('UyeSoyadi'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('UyeSoyadi')}}</strong>
                    </span>
                    @endif
                    <input class="{{$errors->has('UyeEmail') ? 'is-invalid' : ''}}" name="UyeEmail" value="{{ old('UyeEmail') }}" placeholder="Email" type="text" tabindex="3" required>
                    @if($errors->has('UyeEmail'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('UyeEmail')}}</strong>
                    </span>
                    @endif
                    <input class="{{$errors->has('UyeTelefon') ? 'is-invalid' : ''}}" name="UyeTelefon" value="{{ old('UyeTelefon') }}" placeholder="Cep Telefonu" type="text" tabindex="3" required>
                    @if($errors->has('UyeTelefon'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('UyeTelefon')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-6 account-left">
                    <input id="password" class="{{$errors->has('UyeSifre') ? 'is-invalid' : ''}}" name="UyeSifre" placeholder="Şifre" type="password" tabindex="4" required>
                    @if($errors->has('UyeSifre'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('UyeSifre')}}</strong>
                    </span>
                    @endif
                    <input id="password-confirm" placeholder="Şifre Tekrarı" type="password" tabindex="4" required>
                </div>
                <div class="clearfix"></div>
                </div>
                    <div class="address submit">
                    <input type="submit" value="Kayıt Ol">
                </div>
            </form>
        </div>
    </div>

@endsection
