<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LrDocumentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $lrData;
    public $pdf;
    public $emailSubject;
    public $emailBody;

    /**
     * Create a new message instance.
     *
     * @param $lrData
     * @param $pdf
     * @param $emailSubject
     * @param $emailBody
     */
    public function __construct($lrData, $pdf, $emailSubject, $emailBody)
    {
        $this->lrData = $lrData;
        $this->pdf = $pdf;
        $this->emailSubject = $emailSubject;
        $this->emailBody = $emailBody;
        // dd($emailBody);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->emailSubject)
                    ->html($this->emailBody) // Use the body from the modal input
                    ->attachData($this->pdf->output(), 'generate-lr-copy' . $this->lrData->id . '.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
