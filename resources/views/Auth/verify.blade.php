@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link Verifikasi Baru Telah Dikirim ke Email Anda.') }}
                        </div>
                    @endif

                    {{ __('Silahkan Cek Email Anda Untuk Melakukan Verifikasi Akun Anda.') }}
                    {{ __('Jika Email Tidak Terkirim') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik Disini Untuk Mengirim Ulang Link Verifikasi') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
