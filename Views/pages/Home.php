<div class="container-fluid">

	<div class="row justify-content-center">

	<?php if(!empty($ilhas)):?>

		<?php foreach($ilhas as $ilhas_item):?>

			<div class="col-xl-3 col-lg-3 col-md-6 mb-5 d-flex justify-content-center">

				<div class="card shadow">

					<?php if(!empty($ilhas_item['Imagem'])): ?>

						<img
						src="<?= base_url('uploads/'.$ilhas_item['Imagem']); ?>"
						class="card-img-top"
						alt="<?= $ilhas_item['Titulo']; ?>">

					<?php endif; ?>

					<div class="card-body">

						<h3><?= $ilhas_item['Titulo']; ?></h3>

						<p><?= $ilhas_item['Texto_Curto']; ?></p>

					</div>

					<div class="card-footer text-center">

						<a href="#" class="btn btn-success">
							Saiba Mais
						</a>

						<a href="#" class="btn btn-primary">
							Galeria
						</a>

						<a href="#" class="btn btn-info">
							Bandeira
						</a>

						<a href="#" class="btn btn-warning">
							Editar
						</a>

						<a href="#" class="btn btn-danger">
							Excluir
						</a>

					</div>

				</div>

			</div>

		<?php endforeach;?>

	<?php endif;?>

	</div>

</div>