<?php $this->layout('layout/admin-parent', ['title' => 'Admin Dashboard']) ?>

<?php 



?>
<div class="container-xl">
	<div class="table-responsive">
			<div class="table-wrapper">

				<?= ArticlesView::getTable($articles) ?>
				<?= Modal::DisplayModal() ?>
			</div>
		</div>
	</div>
