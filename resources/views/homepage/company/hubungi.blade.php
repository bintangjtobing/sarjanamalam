@extends('homepage.company.about')
@section('title','Hubungi kami - sarjanamalam')
@section('metadesc','Cara menghubungi tim Sarjanamalam.')
@section('metakey','hubungi sarjanamalam, hubungi tim sarjanamalam, tim sarjanamalam, kontak sarjanamalam')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 m-b-60 text-center">
                <h2 class="about-title">Hubungi kami</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-uppercase">Konek bersama kami.</h3>
                <p style="color: #000; !important">Butuh bantuan? Jangan malu ataupun ragu untuk menghubungi kami.
                    Laporkan masalah keamanan atau
                    penyalahgunaan yang mempengaruhi produk sarjanamalam. </p>
                <p>Jika anda mengetahui adanya masalah keamanan atau penyalahgunaan dengan layanan sarjanamalam apapun,
                    beri tahu kami secepatnya.</p>
                <div class="m-t-30">
                    <form action="/kirim-pesan" method="post">
                        @csrf
                        <div class="row">
                            @if(session('sukses'))
                            <div class="form-group col-md-12">
                                <div class="alert alert-primary" role="alert">
                                    <strong>Pesan kamu berhasil dikirimkan!</strong><br>
                                    Kami akan segera membalas pesan kamu dalam 3x24 jam.<br>Jika kami terlalu lama
                                    membalas
                                    silahkan kirim pesan ke email <a
                                        href="mailto:help@sarjanamalam.com">help@sarjanamalam.com</a>
                                </div>
                            </div>
                            @endif
                            <div class="form-group col-md-12">
                                <label for="option">Pilih opsi kontak</label>
                                <select name="options" id="" class="form-control" required>
                                    <option value="" selected>Pilih opsi</option>
                                    <option value="Pertanyaan umum">Pertanyaan umum</option>
                                    <option value="Bantuan layanan atau produk">Bantuan layanan atau produk</option>
                                    <option value="Bug atau kesalahan pada sistem sarjanamalam">Bug atau kesalahan pada
                                        sistem sarjanamalam</option>
                                    <option value="Celah keamanan atau penyalahgunaan pada sarjanamalam">Celah keamanan
                                        atau penyalahgunaan pada sarjanamalam</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="nama_lengkap" required
                                    class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="email" required
                                    class="form-control required email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="subject" required class="form-control required"
                                    placeholder="Subject...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="messages" required rows="5" class="form-control required"
                                placeholder="Enter your Message"></textarea>
                        </div>

                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send
                            message</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-uppercase">Alamat & Peta</h3>
                <div class="row">
                    <div class="col-md-12">
                        <address>
                            <strong>Sarjanamalam. Communities</strong><br>
                            Aloina Residence,<br>
                            Jl. Bunga Kenanga No. 19 - 14<sup>th</sup>,
                            Medan Selayang<br>Sumatera Utara 20131
                            Indonesia<br>
                            <abbr title="Phone">P:</h4> 0812 6284 5980
                        </address>
                    </div>
                    {{-- <div class="col-lg-6">
                        <address>
                            <strong>Polo Office</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div> --}}
                </div>

                <div class="map" data-latitude="3.5527065" data-longitude="98.6492231" data-style="light"></div>

            </div>
        </div>
    </div>
</section>
@endsection
