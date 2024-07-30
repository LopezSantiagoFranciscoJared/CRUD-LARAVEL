<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
class VideogameMail extends Mailable
{
    use Queueable, SerializesModels;
    public function __construct()
    {
        //
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Videogame Mail',
        );
    }
    public function build()
    {
        $nombre = "El GamePass";
        return $this->view('mails.videogame')
                    ->subject('Videogame Mail')
                    ->with(['nombre' => $nombre]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
