<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@component('mail::message')
# Sarjanamalam signup

Selamat {{$nama}}, kamu telah berhasil menjadi keanggotaan di Sarjanamalam.
Klik url ini jika tombol dibawah tidak berfungsi
<a
    href="http://localhost:8000/verification-user/{{$iduser}}/{{$tokens}}">http://localhost:8000/get-verification/{{$iduser}}/{{$tokens}}</a>
@component('mail::button', ['url' => 'http://localhost:8000/get-verification/{{$iduser}}/{{$tokens}}'])
Klik disini
@endcomponent

Thanks,<br>
{{-- {{ config('app.name') }} --}}
Sarjanamalam.
@endcomponent
