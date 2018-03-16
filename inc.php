<?php
/**
 * Copyright (c) 2018.
 * andrewmgunn26@gmail.com
 */

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 3/15/18
 * Time: 8:40 PM
 */


function scan_movies() {

	$path = '/Users/andy/Web/cloudground-theme/mov';
	$dirs = scandir( $path, SCANDIR_SORT_NONE );
	var_dump( $dirs );


	foreach ( $dirs[1] as $dir ) {
		$arr = expxlode( ' ', $dir );

		$str = str_split($dir);
		//echo $arr[1];
		echo $str[0];
	}


	//echo $dirs[1];


}

scan_movies();