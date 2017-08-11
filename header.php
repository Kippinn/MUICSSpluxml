<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<script src="https://widget.battleforthenet.com/widget.js" async></script>
    <meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/static/fav.ico" />
    <meta property="og:image" content="<?php $plxShow->template(); ?>/static/og_image_1.jpg"/>
    <link rel="apple-touch-icon" href="<?php $plxShow->template(); ?>/static/og_image_1.jpg">
	<link href="<?php $plxShow->template(); ?>/mui/css/mui.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php $plxShow->template(); ?>/static/font/font.css" rel="stylesheet" type="text/css" />
    <script src="<?php $plxShow->template(); ?>/mui/js/mui.min.js"></script>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/static/style.css?<?php echo time(); ?>" media="screen"/>
</head>
<body>
    <header class="mui-appbar mui--z1">
      <div class="mui-container">
        <table width="100%">
          <tr class="mui--appbar-height">
            <td class="mui--text-title"><?php $plxShow->mainTitle('link'); ?></td>
            <td align="right">
              <ul class="mui-list--inline mui--text-body2">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name" class="#static_status">#static_name</a></li>'); ?>                
              </ul>
              <div class="mui-dropdown">
				<a id="appbar-more-vert" data-mui-toggle="dropdown"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
				<ul class="mui-dropdown__menu mui-dropdown__menu--right" style="top: 18px;">
					<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name" class="#static_status">#static_name</a></li>'); ?>      
			    </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </header>
	<div class="mui--appbar-height"></div>     	
