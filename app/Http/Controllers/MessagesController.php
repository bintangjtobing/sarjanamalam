<?php

namespace App\Http\Controllers;

use App\chatMessage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use \App\Thread;
use \App\UserMod;
use Illuminate\Contracts\Encryption\DecryptException;
use Pusher\Pusher;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessagesController extends Controller
{
    public function index()
    {
        // Pilih semua user kecuali user yang login
        $users = UserMod::where('id', '!=', auth::id())->get();

        // menghitung banyak  pesan  yg tak terbaca
        // $users = DB::select('SELECT users.id, users.name, users.displaypic, users.email, count(is_read) AS unread FROM users LEFT JOIN direct ON users.id = direct.from AND is_read = 0 and direct.to=" . Auth::id() . " WHERE users.id != " . Auth::id() . " GROUP BY users.id, users.name,users.displaypic, .users.email');

        return view('forum.messages.home', ['users' => $users]);
    }
    public function getMessage($user_id)
    {
        // ambil semua pesan dari pengguna yang dipilih
        // from = auth::id to = user_id or from = user_id to auth::id
        $my_id = Auth::id();

        // when  click to see message select
        chatMessage::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        $messages = chatMessage::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->orWhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->get();

        return view('forum.messages.view', ['messages' => $messages]);
    }
    public function sendMessage(Request $request)
    {
        $from = auth()->user()->id;
        $to = $request->receiver_id;
        $message = $request->message;

        $getPesan = new \App\chatMessage;
        $getPesan->from = $from;
        $getPesan->to = $to;
        $getPesan->message = $message;
        $getPesan->is_read = 0;

        $getPesan->save();

        // PUSHER APP API
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to];
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
