<?php include(dirname(__FILE__).'/header.php'); ?>
	<br />	 
	<div class="mui-container">		
		<div class="mui-row mui--text-left">
			<div class="mui-col-xs-12 mui-col-md-8">
				<div class="mui-panel">
					<h1><?php $plxShow->staticTitle(); ?></h1>
					<?php $plxShow->staticContent(); ?>
				</div>
			</div>
   			<div class="mui-col-xs-12 mui-col-md-4">
				<div class="mui-panel">
					<?php include(dirname(__FILE__).'/sidebar.php'); ?>
				</div>
			</div>
		</div>
    </div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
