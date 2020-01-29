<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
@component('mail::message')
# Sarjanamalam signup

Selamat {{$data_member->name}}, kamu telah berhasil menjadi keanggotaan di Sarjanamalam.
Klik url ini jika tombol dibawah tidak berfungsi
<a
    href="http://localhost:8000/verification-user/{{$data_member->id}}/{{str_limit($tokens, $limit=10)}}">http://localhost:8000/get-verification/{{$data_member->id}}/{{str_limit($tokens, $limit=10)}}</a>
@component('mail::button', ['url' => 'http://localhost:8000/get-verification/'.$data_member->id/$tokens'])
Klik disini
@endcomponent

Thanks,<br>
{{-- {{ config('app.name') }} --}}
Sarjanamalam.
@endcomponent
