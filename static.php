<?php include __DIR__.'/header.php'; ?>
	<article class="article static" id="static-page-<?php echo $plxShow->staticId(); ?>">
		<header>
			<h2>
				<?php $plxShow->staticTitle(); ?>
			</h2>
		</header>
		<section>
		<?php $plxShow->staticContent(); ?>
		</section>
	</article>
<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>
