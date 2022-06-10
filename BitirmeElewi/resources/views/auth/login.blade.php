@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active">Giriş Yap</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="account">
        <div class="container">
            <div class="account-top heading">
                <h2>GİRİŞ YAP</h2>
            </div>
            <div class="account-main">
                <div class="col-md-12 account-left">
                    <h3>Mevcut Kullanıcı</h3>
                    <div class="account-bottom">
                        <form method="POST" action="{{route('login')}}">
                            {{csrf_field()}}
                            <input placeholder="Email" type="email" class="form-control{{$errors->has('UyeEmail') ? 'is-invalid' : ''}}" tabindex="3" required>
                            @if($errors->has('UyeEmail'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('UyeEmail')}}</strong>
                                </span>
                            @endif
                             <input placeholder="Şifre" style="border: 1px solid #ccc;margin-top: 15px; width: 100%" class="form-control {{$errors->has('UyeSifre') ? 'is-invalid' : ''}}" name="UyeSifre" type="password" tabindex="4" required>
                            @if($errors->has('UyeSifre'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('UyeSifre')}}</strong>
                                </span>
                            @endif
                            <div class="address">
                            <a class="forgot" href="#">Şifrenimi Unuttun?</a>
                            <input type="submit" value="Giriş Yap">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
