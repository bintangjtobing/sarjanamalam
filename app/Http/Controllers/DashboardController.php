<?php

namespace App\Http\Controllers;

use App\blogDB;
use App\eventDB;
use App\messagesDB;
use App\UserMod;
use App\karirDB;
use App\subkarirDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;

class DashboardController extends Controller
{
    public function daftarevent($enc_eventid, $nama_event)
    {
        $dec_id = base64_decode($enc_eventid);
        $eventdaf = \App\eventDB::find($dec_id);
        return view('homepage.company.daftarevent', ['eventdaf' => $eventdaf]);
        // dd($eventdaf);
    }
    public function index()
    {
        $usermg = DB::table('users')
            ->select('users.*')
            ->get();
        return view('authen.dash', ['usermg' => $usermg]);
    }
    // USER
    public function usermgmt()
    {
        $usermg = DB::table('users')
            ->select('users.*')
            ->orderBy('users.created_at', 'ASC')
            ->get();
        return view('authen.user', ['usermg' => $usermg]);
    }
    public function deleteuser($id)
    {
        $user = UserMod::find($id);

        if ($user) {
            if ($user->delete()) {

                DB::statement('ALTER TABLE users AUTO_INCREMENT = ' . (count(UserMod::all()) + 1) . ';');

                return back()->with('sukses', 'Users has been successfully deleted!');
            }
        }
    }
    public function edituser($id)
    {
        $user  = \App\UserMod::find($id);
        $userget = DB::table('users')
            ->where('users.id', '=', $id)
            ->join('provinces', 'users.provinsi', '=', 'provinces.province_id')
            ->select('provinces.*', 'users.*')
            ->get();
        $province = DB::table('provinces')
            ->select('provinces.*')
            ->get();
        return view('dashboard.user.edit', ['userget' => $userget, 'user' => $user, 'province' => $province]);
        // dd($userget);
    }
    public function updateuser(Request $request, $id)
    {
        $user =  \App\UserMod::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->verified_password = $request->password;
        $user->kota = $request->city;
        $user->provinsi = $request->state;
        $user->kodepos = $request->zip;
        $user->tanggallahir = $request->tanggallahir;
        $user->bulanlahir  = $request->bulan;
        $user->tahunlahir = $request->tahunlahir;
        $user->role = $request->role;
        $user->jabatan = $request->jabatan;
        if ($request->hasFile('displaypic')) {
            $request->file('displaypic')->move(public_path('file/profilepic'), $request->file('displaypic')->getClientOriginalName());
            $user->displaypic = $request->file('displaypic')->getClientOriginalName();
        }
        $user->updated_by = auth()->user()->name;

        $user->save();
        return back()->with('sukses', 'Save successfully!');
        // dd($request->all());
    }
    public function eventmgmt()
    {
        $eventL = DB::table('events')
            ->select('events.*')
            ->orderBy('events.created_at', 'desc')
            ->get();
        return view('dashboard.event.index', ['eventL' => $eventL]);
    }

    ////////////////// PESAN, EVENT, KARIR ///////////////////////////
    // VIEW DASHBOARD PESAN
    public function pesan()
    {
        $pesan = DB::table('messages')
            ->where('messages.status', '!=', 'trashed')
            ->orderBy('messages.created_at', 'DESC')
            ->select('messages.*')
            ->paginate(25);
        $pesanall = \App\messagesDB::all();
        return view('authen.pesan', ['pesan' => $pesan, 'pesanall' => $pesanall]);
    }
    public function indexblog()
    {
        $blog = DB::table('blog')
            ->orderBy('blog.created_at', 'DESC')
            ->select('blog.*')
            ->get();
        return view('authen.blog', ['blog' => $blog]);
    }
    public function deleteblog($blog_id)
    {
        $blog = blogDB::find($blog_id);
        if ($blog) {
            if ($blog->delete()) {
                DB::statement('ALTER TABLE blog AUTO_INCREMENT = ' . (count(blogDB::all()) + 1) . ';');
                return back()->with('sukses', 'Blog telah dihapus.');
            }
        }
    }
    public function event()
    {
        $event = DB::table('events')
            ->orderBy('events.created_at', 'DESC')
            ->select('events.*')
            ->get();
        return view('authen.events', ['event' => $event]);
    }
    public function karir()
    {
        $karir = DB::table('career')
            ->orderBy('career.created_at', 'DESC')
            ->select('career.*')
            ->get();
        return view('authen.karir', ['karir' => $karir]);
    }
    public function infokarir($career_id)
    {
        $karirget = \App\karirDB::find($career_id);
        $subinfo = DB::table('career')
            ->where('subcareer.career_id', '=', $career_id)
            ->join('subcareer', 'subcareer.subcareer_id', '=', 'career.career_id')
            ->select('subcareer.*', 'career.*')
            ->get();
        return view('authen.infokarir', ['karirget' => $karirget, 'subinfo' => $subinfo]);
    }
    public function subkarir()
    {
        $subkarir = DB::table('subcareer')
            ->orderBy('subcareer.created_at', 'DESC')
            ->select('subcareer.*')
            ->get();
        $karir = DB::table('career')
            ->select('career.*')
            ->get();
        return view('authen.subkarir', ['subkarir' => $subkarir, 'karir' => $karir]);
    }
    public function subkaririnfo($subcareer_id)
    {
        $subfo = \App\subkarirDB::find($subcareer_id);
        $subinfo = DB::table('subcareer')
            ->where('subcareer.subcareer_id', '=', $subcareer_id)
            ->join('career', 'career.career_id', '=', 'subcareer.subcareer_id')
            ->select('subcareer.*', 'career.*')
            ->get();
        // dd($sub);
        return view('authen.infoteam', ['subinfo' => $subinfo, 'subfo' => $subfo]);
    }
    public function openkarir($subcareer_id)
    {
        $sub = \App\subkarirDB::find($subcareer_id);
        $sub->status = 'Recruitment telah dibuka!';
        $sub->save();
        return back()->with('sukses', 'Karir berhasil dibuka!');
    }
    public function closekarir($subcareer_id)
    {
        $sub = \App\subkarirDB::find($subcareer_id);
        $sub->status = 'Recruitment telah ditutup!';
        $sub->save();
        return back()->with('sukses', 'Karir berhasil ditutup!');
    }
    public function trashkarir($subcareer_id)
    {
        $sub = subkarirDB::find($subcareer_id);
        if ($sub) {
            if ($sub->delete()) {
                DB::statement('ALTER TABLE subcareer AUTO_INCREMENT = ' . (count(subkarirDB::all()) + 1) . ';');
                return redirect('/sub-karir/{tokens}')->with('sukseskarir', 'Data pekerjaan telah dihapus.');
            }
        }
    }
    public function pelamar()
    {
        $pelamar = DB::table('candidate')
            ->select('candidate.*')
            ->get();
        return view('authen.candidate', ['pelamar' => $pelamar]);
    }
    public function detailpelamar($enc_id)
    {
        $dcrypt_id = decrypt($enc_id);

        $pelamar = \App\candidateDB::find($dcrypt_id);
        $pelamar->status_interview = 'Sudah dilihat';
        $pelamar->save();

        return view('authen.detailpelamar', ['pelamar' => $pelamar]);
    }
    public function trashpelamar($enc_id)
    {
        $dcrypt_id = decrypt($enc_id);
        $tokens = bin2hex(openssl_random_pseudo_bytes(64));
        $pelamar = \App\candidateDB::find($dcrypt_id);
        $pelamar->status_interview = 'Ditolak';
        $pelamar->save();

        return redirect('/pelamar/{$tokens}')->with('sukses', 'Pelamar ditolak!');
    }
    public  function terimapelamar($enc_id)
    {
        $dcrypt_id = decrypt($enc_id);
        $tokens = bin2hex(openssl_random_pseudo_bytes(64));
        $pelamar = \App\candidateDB::find($dcrypt_id);
        $pelamar->status_interview = 'Diterima';
        $pelamar->save();
        return redirect('/pelamar/{tokens}')->with('sukses', 'Pelamar diterima!');
    }
    public function threads()
    {
        $threads = DB::table('threads')
            ->orderBy('threads.created_at', 'DESC')
            ->select('threads.*')
            ->get();
        return view('authen.threads', ['threads' => $threads]);
    }
    public function peserta()
    {
        $peopleget = DB::table('peserta_event')
            ->orderBy('peserta_event.created_at', 'DESC')
            ->select('peserta_event.*')
            ->get();
        return view('authen.peserta', ['peopleget' => $peopleget]);
    }
    // MASUKKAN KE KERANJANG SAMPAH
    public function trash()
    {
        $pesan = DB::table('messages')
            ->where('messages.status', '=', 'trashed')
            ->orderBy('messages.created_at', 'DESC')
            ->select('messages.*')
            ->paginate(25);
        $pesanall = \App\messagesDB::all();
        return view('authen.pesan', ['pesan' => $pesan, 'pesanall' => $pesanall]);
    }

    // EDIT/GET VIEW
    public function bacapesan($messages_id)
    {
        $pesanget = \App\messagesDB::find($messages_id);
        $pesanget->status = 'read';
        $pesanget->save();
        return view('authen.bacapesan', ['pesanget' => $pesanget]);
    }
    public function detailevent($event_id)
    {
        $eventget = \App\eventDB::find($event_id);
        return view('authen.detailevent', ['eventget' => $eventget]);
    }
    public function approvestatus($event_id)
    {
        $eventget = \App\eventDB::find($event_id);
        $eventget->status = 'approved';
        $eventget->save();
        return back()->with('sukses', 'Status event telah berhasil diubah ke posisi sudah disetujui.');
    }
    public function unapprovedstatus($event_id)
    {
        $eventget = \App\eventDB::find($event_id);
        $eventget->status = 'unapproved';
        $eventget->save();
        return back()->with('sukses', 'Status event telah berhasil diubah ke posisi tidak disetujui.');
    }
    public function runningstatus($event_id)
    {
        $eventget = \App\eventDB::find($event_id);
        $eventget->status = 'running';
        $eventget->save();
        return back()->with('sukses', 'Status event telah berhasil diubah ke posisi event sedang berjalan.');
    }
    public function declinedstatus($event_id)
    {
        $eventget = \App\eventDB::find($event_id);
        $eventget->status = 'declined';
        $eventget->save();
        return back()->with('sukses', 'Status event telah berhasil diubah ke posisi tidak disetujui.');
    }
    public function finishstatus($event_id)
    {
        $eventget = \App\eventDB::find($event_id);
        $eventget->status = 'finished';
        $eventget->save();
        return back()->with('sukses', 'Status event telah berhasil diubah ke posisi telah selesai.');
    }
    public function deleteevent($event_id)
    {
        $event = eventDB::find($event_id);
        if ($event) {
            if ($event->delete()) {
                DB::statement('ALTER TABLE events AUTO_INCREMENT = ' . (count(eventDB::all()) + 1) . ';');
                return redirect('/event/{tokens}')->with('suksesevent', 'Event telah dihapus.');
            }
        }
    }

    // DELETE FUNCTION
    public function pesansampah($messages_id)
    {
        $pesanget = \App\messagesDB::find($messages_id);
        $pesanget->status = 'trashed';
        $pesanget->save();
        return redirect('/pesan/{tokens}')->with('suksessampah', 'Pesan berhasil dimasukkan ke keranjang sampah.');
    }

    public function pesansampah_permanen($messages_id)
    {
        $pesan = messagesDB::find($messages_id);

        if ($pesan) {
            if ($pesan->delete()) {

                DB::statement('ALTER TABLE messages AUTO_INCREMENT = ' . (count(messagesDB::all()) + 1) . ';');

                return back()->with('sukses', 'Users has been successfully deleted!');
            }
        }
    }


    // TAMBAH ITEM BARU KE TABEL DATABASE
    public function addkarir(Request $request)
    {
        $karirget = new \App\karirDB;
        $karirget->nama_team = $request->nama_team;
        $karirget->description = $request->description;
        if ($request->hasFile('features_pic')) {
            $request->file('features_pic')->move(public_path('file/karir/'), $request->file('features_pic')->getClientOriginalName());
            $karirget->features_pic = $request->file('features_pic')->getClientOriginalName();
            $karirget->save();
        }
        return back()->with('sukseskarir', 'Berhasil menambahkan tim baru di sistem.');
        // dd($karirget);
    }
    public function addsubkarir(Request $request)
    {
        $subkarirget = new \App\subkarirDB;
        $subkarirget->career_id =  $request->career_id;
        $subkarirget->nama_subcareer =  $request->nama_subcareer;
        $subkarirget->deskripsi =  $request->deskripsi;
        $subkarirget->minimal_kualifikasi =  $request->minimal_kualifikasi;
        $subkarirget->kualifikasi_rekomendasi =  $request->kualifikasi_rekomendasi;
        $subkarirget->tanggung_jawab =  $request->tanggung_jawab;
        $subkarirget->lokasi =  $request->lokasi;
        $subkarirget->status =  'Belum terbit';

        // dd($subkarirget);
        $subkarirget->save();
        return back()->with('sukseskarir', 'Bagian bagian tim sudah ditambahkan.');
    }
    public function addblog(Request $request)
    {
        $blog = new \App\blogDB;
        $blog->blog_title = $request->blog_title;
        $blog->alternatif = $request->blog_title;
        $blog->kategori_blog = $request->kategori_blog;
        $blog->isiblog = $request->isiblog;
        $blog->created_by  = auth()->user()->name;
        $blog->updated_by = '-';
        if ($request->hasFile('coverimg')) {
            $request->file('coverimg')->move('file/blog', $request->file('coverimg')->getClientOriginalName());
            $blog->coverimg = $request->file('coverimg')->getClientOriginalName();
        }
        $blog->save();
        // dd($blog);

        return back()->with('sukses', 'Berita berhasil ditambah/diupdate');
    }
    public function addevent(Request $request)
    {
        $post = new \App\eventDB;
        $post->nama_pic = $request->nama_pic;
        $post->email_pic = auth()->user()->email;
        $post->nohp_pic = auth()->user()->role;
        $post->nama_event = $request->nama_event;
        $post->deskripsi_event = $request->deskripsi_event;
        $post->kategori_event = $request->kategori_event;
        $post->tglevent = $request->tglevent;
        $post->waktu_event = $request->waktu_event;
        $post->provinsi = $request->provinsi;
        $post->kota = $request->kota;
        $post->tempat_event = $request->tempat_event;
        $post->speaker = $request->speaker;
        $post->harga_event = $request->harga_event;
        $post->optional_info = '-';
        $post->logIP = $request->getClientIp();
        $post->tgl_berakhirevent = '-';
        $post->link_daftar = '-';
        $post->status = 'approved';
        $post->created_by = $request->getClientIp();
        $post->updated_by = $request->getClientIp();

        if ($request->hasFile('picevent')) {
            $request->file('picevent')->move('eventstorage/img/', $request->file('picevent')->getClientOriginalName());
            $post->picevent = $request->file('picevent')->getClientOriginalName();
            $post->save();
            // dd($post);
        }

        return back()->with('sukses', 'Dan akan segera dihubungi kembali melalui email/telepon untuk melakukan
                        konfirmasi kembali terhadap event tersebut.');
    }

    public function partnership()
    {
        $part = DB::table('partnership')
            ->orderBy('partnership.created_at', 'DESC')
            ->select('partnership.*')
            ->get();

        return view('authen.partnership', ['part' => $part]);
    }
}
