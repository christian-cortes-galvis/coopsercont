<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PqrsCreatedMail extends Mailable
{
	use SerializesModels;

	public array $pqrs;

	public function __construct(array $pqrs)
	{
		$this->pqrs = $pqrs;
	}

	public function build()
	{
		$mail = $this->subject('Nuevo pqrs ciudadano recibido')->view('emails.pqrs-creada');
		// Adjuntar foto si existe
		if (!empty($this->pqrs['foto'])) {
			$mail->attach( storage_path('app/public/' . $this->pqrs['foto']) );
		}

		return $mail;
	}
}
