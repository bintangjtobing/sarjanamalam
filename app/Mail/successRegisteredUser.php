<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class successRegisteredUser extends Mailable
{
    public $data_member;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_member)
    {
        $this->data_member = $data_member;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@sarjanamalam.com')
            ->subject('Hai, ' . $this->data_member->name . ' Selamat! Kamu berhasil mendaftar di Sarjanamalam.')
            ->with([
                'nama' => $this->data_member->name,
                'email' => $this->data_member->email,
                'iduser' => $this->data_member->id
            ])
            ->markdown('emails.sites.register');
    }
}
