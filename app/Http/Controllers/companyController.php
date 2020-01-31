<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function howsearch()
    {
        return view('homepage.company.search');
    }
    public function about()
    {
        $blog = DB::table('blog')
            ->orderBy('blog.created_at', 'DESC')
            ->select('blog.*')
            ->get();
        return view('homepage.company.tentang', ['blog' => $blog]);
    }
    public function blog()
    {
        $blog = DB::table('blog')
            ->orderBy('blog.created_at', 'DESC')
            ->select('blog.*')
            ->get();
        return view('homepage.company.blog', ['blog' => $blog]);
    }
    public function readblog($blog_id)
    {
        $blog = \App\blogDB::find($blog_id);
        return view('homepage.company.readblog', ['blog' => $blog]);
    }
    public function event()
    {
        $event = DB::table('events')
            ->where('events.status', '!=', 'declined')
            ->orderBy('events.created_at', 'DESC')
            ->select('events.*')
            ->get();
        $eventcount = \App\eventDB::all();
        return view('homepage.company.event', ['event' => $event, 'eventcount' => $eventcount]);
    }
    public function requestevent()
    {
        return view('homepage.company.request');
    }
    public function private()
    {
        return view('homepage.company.privacy');
    }
    public function postevent(Request $request)
    {
        $post = new \App\eventDB;
        $post->nama_pic = $request->nama_pic;
        $post->email_pic = $request->email_pic;
        $post->nohp_pic = $request->nohp_pic;
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
        $post->optional_info = $request->optional_info;
        $post->logIP = $request->getClientIp();
        $post->tgl_berakhirevent = '-';
        $post->link_daftar = '-';
        $post->status = 'unapproved';
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
    public function registrasievent(Request $request, $event_id)
    {
        $find = \App\eventDB::find($event_id);

        $reg = new \App\pesertaDB;
        $reg->nama_lengkap = $request->nama_lengkap;
        $reg->email = $request->email;
        $reg->nohp = $request->nohp;
        $reg->informasi = $request->informasi;
        $reg->reserved = $request->reserved;
        $reg->created_by = $request->getClientIp();
        $reg->updated_by = $request->getClientIp();
        $reg->save();
        return view('homepage.company.donereg', ['find' => $find]);
    }
    public function karir()
    {
        $karir = DB::table('career')
            ->orderBy('career.created_at', 'DESC')
            ->select('career.*')
            ->get();
        return view('homepage.company.karir', ['karir' => $karir]);
    }
    public function partnership()
    {
        return view('homepage.company.sponsorship');
    }
    public function hubungi()
    {
        return view('homepage.company.hubungi');
    }

    public function cerita()
    {
        return view('homepage.company.cerita');
    }
    public function kirimpesan(Request $request)
    {
        $post = new \App\messagesDB;
        $post->judul_messages = $request->options;
        $post->nama_lengkap = $request->nama_lengkap;
        $post->email = $request->email;
        $post->subject = $request->subject;
        $post->messages = $request->messages;
        $post->status = 'unread';

        $post->save();

        return back()->with('sukses', 'Dan akan segera dihubungi untuk melakukan
                        konfirmasi kembali terhadap event tersebut.');
    }
    public function ajukanpartnership(Request $request)
    {
        $kerjasama =  new \App\partnershipDB;
        $kerjasama->partnershipCompany = $request->institusi;
        $kerjasama->nama_pic = $request->namalengkap;
        $kerjasama->email = $request->email;
        $kerjasama->nohp =  $request->nohp;
        if ($request->hasFile('lampiran')) {
            $request->file('lampiran')->move('proposal/doc/', $request->file('lampiran')->getClientOriginalName());
            $kerjasama->lampiran = $request->file('lampiran')->getClientOriginalName();
        }
        $kerjasama->save();

        return back()->with('suksesajukan', 'Proposal penawaran kerjasama kamu berhasil kami terima! Tunggu balasan email atau kami akan menghubungi anda untuk konfirmasi pengajuan anda.');
    }
}
