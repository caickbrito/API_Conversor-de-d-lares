<?php $v->layout("_theme.php"); ?>



<div class="container d-flex justify-content-center">
	<div class="row">
		<div class="cotacao-atual">
			<h2 class="text-center">R$ <?= $real; ?> reais</h2>
			<h4 class="text-center">1 dólar americano hoje <?= $hoje; ?></h4>		
		</div>
		<form class="form-group" action="<?= $router->route("web.request"); ?>">
			<input class="form-control input-dolar money" placeholder="US$" type="float" name="dolar" id="dolar" style="width: 300px; border-radius: 30px; height: 45px " autocomplete="off">
			<input class="form-control input-real" type="float" name="real" id="real" style="width: 300px; border-radius: 30px; height: 45px" autocomplete="off">
			<button hidden="" type="submit"></button>
		</form>
		<div class="variation" hidden="">			
			<?= $variation; ?>
		</div>
	</div>
</div>



<?php $v->start("scripts");?>
<script type="text/javascript">
	$('form').on('submit', function (e) {
		e.preventDefault();			
		var form = $(this);

		$.ajax({
			url: form.attr("action"),
			type: "post",
			data: form.serialize(),
			dataType:"json",
			beforeSend: function(){
				console.log("Carregando...")
			},
			error: function (e) {
				console.log(e)
			},
			success: function (real) {
				console.log("Ok");
				$("#dolar").val("");
				$("#real").val("R$" + real);
			}
		})
	})
</script>

<?php $v->end();?>

