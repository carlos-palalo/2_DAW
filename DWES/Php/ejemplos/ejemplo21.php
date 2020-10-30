<HTML>

<HEAD>
	<TITLE>Ejemplo 21 - PHP</TITLE>
	<LINK REL="stylesheet" type="text/css" href="estilos/php.css">
	<style type="text/css">
		A:link {
			text-decoration: none;
			color: #009400
		}

		A:visited {
			text-decoration: none;
			color: #009400
		}

		a:hover {
			text-decoration: none;
			color: #ff9400
		}
	</style>
</HEAD>

<BODY>


	<?php
	$b = array(
		"Juvencia"  => array(
			"Juvencia"  => array(
				"Resultado" => " ",
				"Amarillas" => " ",
				"Rojas"     => " ",
				"Penalty"   => " "
			),
			"Mosconia"  => array(
				"Resultado" => "3-2",
				"Amarillas" => "1",
				"Rojas"     => "0",
				"Penalty"   => "1"
			),
			"Canicas"  => array(
				"Resultado" => "5-3",
				"Amarillas" => "0",
				"Rojas"     => "1",
				"Penalty"   => "2"
			),
			"Condal"  => array(
				"Resultado" => "7-1",
				"Amarillas" => "5",
				"Rojas"     => "2",
				"Penalty"   => "1"
			),
			"Piloñesa" => array(
				"Resultado" => "0-2",
				"Amarillas" => "1",
				"Rojas"     => "0",
				"Penalty"   => "0"
			),
		),
		"Mosconia"  => array(
			"Juvencia"  => array(
				"Resultado" => "0-11 ",
				"Amarillas" => "4",
				"Rojas"     => "2",
				"Penalty"   => "4"
			),
			"Mosconia"  => array(
				"Resultado" => " ",
				"Amarillas" => " ",
				"Rojas"     => " ",
				"Penalty"   => " "
			),
			"Canicas"  => array(
				"Resultado" => "2-1",
				"Amarillas" => "0",
				"Rojas"     => "0",
				"Penalty"   => "2"
			),
			"Condal"  => array(
				"Resultado" => "1-0",
				"Amarillas" => "1",
				"Rojas"     => "0",
				"Penalty"   => "0"
			),
			"Piloñesa" => array(
				"Resultado" => "1-2",
				"Amarillas" => "1",
				"Rojas"     => "0",
				"Penalty"   => "0"
			),
		),
		"Canicas"  => array(
			"Juvencia"  => array(
				"Resultado" => "0-0",
				"Amarillas" => "0",
				"Rojas"     => "1",
				"Penalty"   => "1"
			),
			"Mosconia"  => array(
				"Resultado" => "1-3",
				"Amarillas" => "2",
				"Rojas"     => "0",
				"Penalty"   => "1"
			),
			"Canicas"  => array(
				"Resultado" => " ",
				"Amarillas" => " ",
				"Rojas"     => " ",
				"Penalty"   => " "
			),
			"Condal"  => array(
				"Resultado" => "1-4",
				"Amarillas" => "2",
				"Rojas"     => "1",
				"Penalty"   => "1"
			),
			"Piloñesa" => array(
				"Resultado" => "2-0",
				"Amarillas" => "1",
				"Rojas"     => "0",
				"Penalty"   => "0"
			),
		),
		"Condal"  => array(
			"Juvencia"  => array(
				"Resultado" => "1-0 ",
				"Amarillas" => "4",
				"Rojas"     => "1",
				"Penalty"   => "2"
			),
			"Mosconia"  => array(
				"Resultado" => "6-3",
				"Amarillas" => "1",
				"Rojas"     => "2",
				"Penalty"   => "3"
			),
			"Canicas"  => array(
				"Resultado" => "14-3",
				"Amarillas" => "1",
				"Rojas"     => "0",
				"Penalty"   => "0"
			),
			"Condal"  => array(
				"Resultado" => " ",
				"Amarillas" => " ",
				"Rojas"     => " ",
				"Penalty"   => " "
			),
			"Piloñesa" => array(
				"Resultado" => "1-0",
				"Amarillas" => "3",
				"Rojas"     => "1",
				"Penalty"   => "0"
			),
		),
		"Piloñesa"  => array(
			"Juvencia"  => array(
				"Resultado" => "1-1",
				"Amarillas" => "0",
				"Rojas"     => "0",
				"Penalty"   => "1"
			),
			"Mosconia"  => array(
				"Resultado" => "2-3",
				"Amarillas" => "1",
				"Rojas"     => "0",
				"Penalty"   => "0"
			),
			"Canicas"  => array(
				"Resultado" => "0-1",
				"Amarillas" => "0",
				"Rojas"     => "0",
				"Penalty"   => "0"
			),
			"Condal"  => array(
				"Resultado" => "1-1",
				"Amarillas" => "1",
				"Rojas"     => "2",
				"Penalty"   => "0"
			),
			"Piloñesa" => array(
				"Resultado" => " ",
				"Amarillas" => " ",
				"Rojas"     => " ",
				"Penalty"   => " "
			),
		)
	);


	?>
	<table align=center border=2>
		<tr>
			<td colspan=6 id="normalC">Estadísticas de la liguilla</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td id="chiquiC">Juvencia</td>
			<td id="chiquiC">Mosconia</td>
			<td id="chiquiC">Canicas</td>
			<td id="chiquiC">Condal</td>
			<td id="chiquiC">Piloñesa</td>
		</tr>
		<tr>
			<td width=60 id="chiquiC">Juvencia</td>
			<td id="chiquiC">&nbsp;</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Juvencia"]["Mosconia"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Juvencia"]["Mosconia"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Juvencia"]["Mosconia"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Juvencia"]["Mosconia"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Juvencia"]["Canicas"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Juvencia"]["Canicas"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Juvencia"]["Canicas"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Juvencia"]["Canicas"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Juvencia"]["Condal"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Juvencia"]["Condal"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Juvencia"]["Condal"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Juvencia"]["Condal"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Juvencia"]["Piloñesa"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Juvencia"]["Piloñesa"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Juvencia"]["Piloñesa"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Juvencia"]["Piloñesa"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
		</tr>
		<tr>
			<td id="chiquiC">Mosconia</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Mosconia"]["Juvencia"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Mosconia"]["Juvencia"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Mosconia"]["Juvencia"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Mosconia"]["Juvencia"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td id="chiquiC">&nbsp;</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Mosconia"]["Canicas"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Mosconia"]["Canicas"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Mosconia"]["Canicas"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Mosconia"]["Canicas"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Mosconia"]["Condal"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Mosconia"]["Condal"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Mosconia"]["Condal"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Mosconia"]["Condal"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Mosconia"]["Piloñesa"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Mosconia"]["Piloñesa"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Mosconia"]["Piloñesa"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Mosconia"]["Piloñesa"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
		</tr>
		<tr>
			<td id="chiquiC">Canicas</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Canicas"]["Juvencia"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Canicas"]["Juvencia"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Canicas"]["Juvencia"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Canicas"]["Juvencia"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Canicas"]["Mosconia"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Canicas"]["Mosconia"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Canicas"]["Mosconia"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Canicas"]["Mosconia"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td id="chiquiC">&nbsp;</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Canicas"]["Condal"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Canicas"]["Condal"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Canicas"]["Condal"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Canicas"]["Condal"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Canicas"]["Piloñesa"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Canicas"]["Piloñesa"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Canicas"]["Piloñesa"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Canicas"]["Piloñesa"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
		</tr>
		<tr>
			<td id="chiquiC">Condal</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Condal"]["Juvencia"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Condal"]["Juvencia"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Condal"]["Juvencia"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Condal"]["Juvencia"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Condal"]["Mosconia"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Condal"]["Mosconia"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Condal"]["Mosconia"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Condal"]["Mosconia"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>

			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Condal"]["Canicas"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Condal"]["Canicas"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Condal"]["Canicas"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Condal"]["Canicas"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td id="chiquiC">&nbsp;</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Condal"]["Piloñesa"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Condal"]["Piloñesa"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Condal"]["Piloñesa"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Condal"]["Piloñesa"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
		</tr>
		<tr>
			<td id="chiquiC">Piloñesa</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Piloñesa"]["Juvencia"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Piloñesa"]["Juvencia"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Piloñesa"]["Juvencia"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Piloñesa"]["Juvencia"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Piloñesa"]["Mosconia"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Piloñesa"]["Mosconia"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Piloñesa"]["Mosconia"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Piloñesa"]["Mosconia"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Piloñesa"]["Canicas"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Piloñesa"]["Canicas"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Piloñesa"]["Canicas"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Piloñesa"]["Canicas"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>

			<td>
				<table border=0 cellpadding=0 cellspacing=0>
					<tr>
						<td width=30 height=15 id="chiquiC" bgcolor="#bbbbbb"><?php echo $b["Piloñesa"]["Condal"]["Resultado"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#ff00ff"><?php echo $b["Piloñesa"]["Condal"]["Rojas"] ?></td>
					</tr>
					<TR>
						<td width=30 height=15 id="chiquiC" bgcolor="#ffff00"><?php echo $b["Piloñesa"]["Condal"]["Amarillas"] ?></td>
						<td width=30 height=15 id="chiquiC" bgcolor="#00ffff"><?php echo $b["Piloñesa"]["Condal"]["Penalty"] ?></td>
					</tr>
				</TABLE>
			</td>
			<td id="chiquiC">&nbsp;</td>
		</tr>
		<td colspan=6 id="normalC">
			<table border=0 cellpadding=0 cellspacing=0>
				<td width=95 id="chiquiC" bgcolor="#bbbbbb">Resultado</td>
				<td width=95 id="chiquiC" bgcolor="#ff00ff">Tarjetas rojas</td>
				<td width=95 id="chiquiC" bgcolor="#ffff00">Tarjetas amarillas</td>
				<td width=95 id="chiquiC" bgcolor="##00ffff">Penalties</td>
			</table>
		</td>
		</tr>

	</table>
</BODY>

</HTML>