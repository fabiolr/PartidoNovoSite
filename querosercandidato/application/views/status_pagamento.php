<?php include("_head.inc.php") ?>  

<?php include("_header.inc.php") ?>

<div class="container" id="pagamento">

	<h1>Status do Pagamento</h1>
	<!---->
	<div id="content">
		<span class="text-center">
			<p>{mensagem}</p>
			<form action="{base_url}{form_url}" method="post">
				<input type="hidden" name="doc" value="{doc}">
				<?php if (isset($boletopendente)) { ?>
					<a href="{base_url}pagamento/boleto/{doc}" class="btn enviar" target="_blank">Reimprimir Boleto</a>
				<?php } ?>
				<input type="submit" value="{texto_link}" class="btn enviar text-center">
			</form>
		</span>
	</div>
	<!---->
</div>

<?php include("_footer.inc.php") ?>