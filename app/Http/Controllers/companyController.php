<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
    public function about()
    {
        return view('homepage.company.tentang');
    }
    public function blog()
    {
        return view('homepage.company.blog');
    }
    public function event()
    {
        return view('homepage.company.event');
    }
    public function postevent(Request $request)
    {
        $post = new \App\eventDB;
        $post->nama_event = $request->nama_event;
        $post->nama_pic = $request->nama_pic;
        $post->nohp_pic = $request->nohp_pic;
        $post->email_pic = $request->email_pic;
        $post->kategori_event = $request->kategori_event;
        $post->deskripsi_event = $request->deskripsi_event;
        $post->logIP = $request->getClientIp();
        $post->tglevent = '-';
        $post->harga_event = '-';
        $post->speaker = '-';
        $post->tempat_event = '-';
        $post->tgl_berakhirevent = '-';
        $post->waktu_event = '-';
        $post->link_daftar = '-';
        $post->created_by = $request->getClientIp();
        $post->updated_by = $request->getClientIp();
        $post->save();

        return back()->with('sukses', 'Dan akan segera dihubungi untuk melakukan
                        konfirmasi kembali terhadap event tersebut.');
    }
    public function karir()
    {
        return view('homepage.company.karir');
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
}
