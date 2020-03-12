<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class resetPasswordUser extends Mailable
{
    public $dataUser;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataUser)
    {
        $this->dataUser = $dataUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('reset-account@sarjanamalam.com', 'Instruction to reset your account.')
            ->subject('Hai, ' . $this->dataUser->name . ' Perhatikan instruksi, untuk mereset akun.')
            ->with([
                'nama' => $this->dataUser->name,
                'email' => $this->dataUser->email,
                'iduser' => $this->dataUser->id,
                'username' => $this->dataUser->username
            ])
            ->markdown('emails.sites.reset');
    }
}
