<?php
list_all('./');

function list_all($dir)
{
	echo '<ul>';
	$files = scandir($dir);
	foreach ($files as $file) 
		if ($file === '.' || $file === '..') {
			continue;
		}
		echo '<li>';
		$newdir = $dir . $file . '/';
		if (is_dir($newdir)) {
			echo $newdir;
			list_all($newdir);
		}
		else {
			echo '<a href="' . $dir . $file . '">' . $file . '</a>';
		}
		echo '</li>';
	}
	echo '</ul>';
}
