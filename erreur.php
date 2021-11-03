<?php include __DIR__.'/header.php'; ?>
	<article class="article">
		<header>
			<h2>
				<?php $plxShow->lang('ERROR'); ?>
			</h2>
		</header>
		<section>
			<p>
				<?php $plxShow->erreurMessage(); ?>
			</p>
		</section>
	</article>
<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>

