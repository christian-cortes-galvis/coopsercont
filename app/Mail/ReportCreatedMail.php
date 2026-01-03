<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportCreatedMail extends Mailable
{
	use SerializesModels;

	public array $reporte;

	public function __construct(array $reporte)
	{
		$this->reporte = $reporte;
	}

	public function build()
	{
		$mail = $this->subject('Nuevo reporte ciudadano recibido')
			->view('emails.reporte-creado');

		// Adjuntar foto si existe
		if (!empty($this->reporte['foto'])) {
			$mail->attach(
				storage_path('app/' . $this->reporte['foto'])
			);
		}

		return $mail;
	}
}
