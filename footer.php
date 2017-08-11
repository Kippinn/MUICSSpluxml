<?php if (!defined('PLX_ROOT')) exit; ?>
	<footer>
      <div class="mui-container mui--text-center">
       Copyright &copy; <?php echo date('Y'); ?> <?php $plxShow->mainTitle('link'); ?> | <?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="https://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
					| <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
      </div>
    </footer>
</body>

</html>
