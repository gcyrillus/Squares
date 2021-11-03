<?php include __DIR__.'/header.php'; ?>
	<article class="article" id="post-<?php echo $plxShow->artId(); ?>">				
	<div>
		<small>
			<span class="written-by">
				<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
			</span>
			<span class="art-nb-com">
				<?php $plxShow->artNbCom(); ?>
			</span>
			</small>
			<small>
				<span class="classified-in">
					<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>
				</span>
				<span class="tags">
					<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
				</span>
			</small>					
	</div>
	<div class="post-content">
		<p class="date"><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
					<?php $plxShow->artDate('#num_day #month'); ?>
				</time></p>
		<header>
			<h2>
				<?php $plxShow->artTitle('link'); ?>
			</h2>
		</header>
		<section>
			<?php $plxShow->artThumbnail(); ?>
			<?php $plxShow->artContent(); ?>
		</section>
		</div>
			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
			<?php include __DIR__.'/commentaires.php'; ?>
		</article>


<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>
