<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo reporte ciudadano</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f9; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:20px;">
	<tr>
		<td align="center">

			<table width="600" cellpadding="0" cellspacing="0"
				style="background:#ffffff; border-radius:6px; border:1px solid #dcdcdc;">

				<!-- HEADER -->
				<tr>
					<td style="background:#0D4DA1; color:#ffffff; padding:16px 20px;">
						<h2 style="margin:0;">Nuevo reporte ciudadano</h2>
						<p style="margin:4px 0 0; font-size:13px;">
							COOPSERCONT – Atención al ciudadano
						</p>
					</td>
				</tr>

				<!-- CUERPO -->
				<tr>
					<td style="padding:20px; font-size:14px;">

						<p>
							Se ha recibido un nuevo reporte ciudadano con la siguiente información:
						</p>

						<!-- DATOS -->
						<table width="100%" cellpadding="6" cellspacing="0"
							style="border-collapse:collapse; margin-bottom:16px;">

							<tr style="background:#f0f3f8;">
								<td width="35%"><strong>Fecha de recepción</strong></td>
								<td>{{ $reporte['fecha'] }}</td>
							</tr>

							<tr>
								<td><strong>Nombre completo</strong></td>
								<td>{{ $reporte['nombre'] }}</td>
							</tr>

							<tr style="background:#f0f3f8;">
								<td><strong>Documento</strong></td>
								<td>{{ $reporte['documento'] }}</td>
							</tr>

							<tr>
								<td><strong>Dirección</strong></td>
								<td>{{ $reporte['direccion'] }}</td>
							</tr>

							<tr style="background:#f0f3f8;">
								<td><strong>Teléfono</strong></td>
								<td>{{ $reporte['telefono'] }}</td>
							</tr>

							<tr>
								<td><strong>Correo electrónico</strong></td>
								<td>{{ $reporte['email'] ?? 'No suministrado' }}</td>
							</tr>

							<tr style="background:#f0f3f8;">
								<td><strong>Tipo de incidencia</strong></td>
								<td>{{ ucfirst($reporte['tipo_incidencia']) }}</td>
							</tr>

						</table>

						<!-- DESCRIPCIÓN -->
						<h4 style="color:#0D4DA1; margin-bottom:6px;">
							Descripción del reporte
						</h4>

						<div style="border:1px solid #dcdcdc; background:#fafafa; padding:12px; line-height:1.6;">
							{{ $reporte['descripcion'] }}
						</div>

						@if(!empty($reporte['foto']))
							<p style="margin-top:12px; font-size:13px;">
								📎 Se adjunta evidencia fotográfica enviada por el ciudadano.
							</p>
						@endif

					</td>
				</tr>

				<!-- FOOTER -->
				<tr>
					<td style="background:#f8f9fb; padding:12px 20px; font-size:12px; color:#555;">
						<p style="margin:0;">
							Este mensaje fue generado automáticamente desde el sitio web
							institucional de <strong>COOPSERCONT</strong>.
						</p>
						<p style="margin:4px 0 0;">
							No responda este correo.
						</p>
					</td>
				</tr>

			</table>

		</td>
	</tr>
</table>

</body>
</html>
