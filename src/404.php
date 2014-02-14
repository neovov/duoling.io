---
layout: default
---
<?php
	$fragment = $_SERVER['REQUEST_URI'];
	$fragment = preg_replace('/^\/(.+)\.html$/', '$1', $fragment);
	$fragment = explode('/', $fragment);
	list($what, $lang) = $fragment;
?>
<p>This page doesn’t exists yet.</p>
<p>You know how to <strong><?php echo $what ?></strong> in <strong><?php echo $lang ?></strong>? <a href="https://github.com/neovov/duoling.io/new/master/src/<?php echo urlencode($what) ?>?filename=<?php echo urlencode($lang) ?>.html&message=<?php echo urlencode('Create '.$what.'/'.$lang.'.html') ?>">Write the page directly in GitHub</a>!</p>