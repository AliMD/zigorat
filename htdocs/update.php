<?php
/*
 * Ali.MD - Update server from remote ziped repo (github)
 * 
 * Copyright (c) 2012, Ali Mihandoost (i@ali.md)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 */




/**
 * Custom echo function and force to send message to client.
 *
 * @param   string      Message text.
 *
 * @return  void
 */

function e($msg){
  echo $msg."\n";
  @ob_flush();
  @flush();
}

/**
 * Custom die function
 *
 * @param   string      Error message.
 *
 * @return  void
 */

function death($err){
  e("<b style='color:red;'>$err</b>");
  die();
}

/**
 * Download a file using curl.
 *
 * @param   string      Remote http file url.
 * @param   string      local file address to download.
 *
 * @return  void
 */

function http_get_file($remote_url, $local_file)    {
	$fp = @fopen($local_file, 'w') or death("Error in opening $local_file");

	$cp = @curl_init($remote_url) or death("Error in connecting $remote_url");
	curl_setopt($cp, CURLOPT_FILE, $fp);

	$buffer = @curl_exec($cp) or death("Error in downloading $remote_url");

	curl_close($cp);
	fclose($fp);
}

/**
 * Unzip the source_file in the destination dir.
 *
 * @param   string      The path to the ZIP-file.
 * @param   string      The path where the zipfile should be unpacked, if false the directory of the zip-file is used.
 * @param   boolean     Indicates if the files will be unpacked in a directory with the name of the zip-file (true) or not (false) (only if the destination directory is set to false!).
 * @param   boolean     Overwrite existing files (true) or not (false).
 *  
 * @return  void
 */

function unzip($src_file, $dest_dir=false, $create_zip_name_dir=true, $overwrite=true){
	$zip = zip_open($src_file) or death('Error in opening $src_file');
	$splitter = ($create_zip_name_dir === true) ? "." : "/";
	if ($dest_dir === false) $dest_dir = substr($src_file, 0, strrpos($src_file, $splitter));
	$dest_dir=$dest_dir.'/';
	// Create the directories to the destination dir if they don't already exist
	create_dirs($dest_dir);

	// For every file in the zip-packet
	while (@$zip_entry = zip_read($zip)) {
		// Now we're going to create the directories in the destination directories

		// If the file is not in the root dir
		if (($pos_last_slash = strrpos(zip_entry_name($zip_entry), "/")) !== false){
			// Create the directory where the zip-entry should be saved (with a "/" at the end)
			create_dirs($dest_dir.substr(zip_entry_name($zip_entry), 0, $pos_last_slash+1));
		}

		// Open the entry
		if (zip_entry_open($zip,$zip_entry,"r")){

			// The name of the file to save on the disk
			$file_name = $dest_dir.zip_entry_name($zip_entry);

			// Check if the files should be overwritten or not
			if (!is_dir($file_name) && ( $overwrite === true || $overwrite === false && !is_file($file_name) ) ){
				// Get the content of the zip entry
				$fstream = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

				file_put_contents($file_name, $fstream );
				// Set the rights
				chmod($file_name, 0755);
				e("Extract file: ".$file_name);
			}
			// Close the entry
			zip_entry_close($zip_entry);
		}       
	}
	// Close the zip-file
	@zip_close($zip);
}

/**
 * Make recursive directories if it doesn't already exist.
 *
 * @param   string      The path that should be created.
 *  
 * @return  void
 */

function create_dirs($path){
	if (!is_dir($path)){
		$directory_path = "";
		$directories = explode("/",$path);
		array_pop($directories);

		foreach($directories as $directory){
	  		$directory_path .= $directory."/";
	  		if (!is_dir($directory_path)){
				mkdir($directory_path);
				chmod($directory_path, 0755);
				e("Make Dir: $directory_path");
	  		}
		}
	}
}

/**
 * Delete a directory that is not empty.
 *
 * @param   string    The path that should be removed.
 * @param   string    The exeption array Contains files and folders name that should not be deleted.
 *  
 * @return  void
 */

function rrmdir($dir,$exeption=false) {
	if (is_dir($dir) && ($exeption==false || !in_array(end(explode('/', $dir)), $exeption)) ) {
		$objects = scandir($dir);
		foreach ($objects as $object) {
			if ($object != "." && $object != "..") {
				$ndir="$dir/$object";
				if (filetype($ndir) == "dir"){
					rrmdir($ndir,$exeption);
				}elseif($exeption==false || !in_array($object, $exeption)){
					@unlink($ndir) or death("Error in delete $ndir");
					e("Delete File: $ndir");
				}
			}
		}
		@rmdir($dir);
		e("Remove Dir: $dir");
	}
}

/**
 * Move all content of a dir to another dir.
 *
 * @param   string     The old folder path
 * @param   string     The new folder path
 *  
 * @return  void
 */

function move_dir($olddir,$newdir,$keep_files) {
	is_dir($olddir) or death("$olddir is not a directory");
	is_dir($newdir) or death("$newdir is not a directory");

	$objects = scandir($olddir);
	foreach ($objects as $object) {
		if ($object != "." && $object != "..") {
			$oldobj="$olddir/$object";
			$newobj="$newdir/$object";

			is_dir($newobj) && rrmdir($newobj,$keep_files);
			if(!(is_dir($newobj) || in_array($object,$keep_files))){
				rename($oldobj, $newobj) or death("Error in moving $oldobj -> $newobj");
				e("Move : $oldobj -> $newobj");
			}
		}
	}
}

/**
 * Find first directory in $dir.
 *
 * @param   string     The directory path
 *  
 * @return  string     name of first directory or die.
 */

function get_first_dir($dir){
	is_dir($dir) or death("$dir is not a directory");
	$objects = scandir($dir);
	foreach ($objects as $object) {
		if ($object != "." && $object != ".." && is_dir("$dir/$object")) {
			return $object;
		}
	}
	death("Directory not fount in $dir");
}

// ----------- Updating site ----------
ob_start();

if(md5($_GET['p'])!='0397979ec002e5c7cfc70111701999e9') death('Access denied');

$github_zip = 'https://nodeload.github.com/1dws/chromeframe.ir/zipball/master';
$locat_zip = './last_update_temp.zip';
$extract_dir = './last_update_temp';
$htdoc_dir = "htdocs";
$public_dir = '.';
$keep_files = 'cgi-bin,.htaccess,backup,downloads';

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Updating site</title>
	<style type="text/css">
		body{
			padding: 10px;
			background-color: black;
			color: white;
			font-family: Monaco, Menlo, Courier, monospace;
		}
	</style>
</head>
<body>

<pre>
<?php
	e("<b>Downloding:</b> $github_zip ...");
	http_get_file($github_zip,$locat_zip);
	e("Downloaded: $locat_zip");

	e('---------------');

	$keep_files .= ($keep_files?',':'').end(explode('/',$locat_zip));
	$keep_files .= ','.end(explode('/',($_SERVER['SCRIPT_FILENAME'])));
	e("<b>Removing old :</b> $public_dir <b>except</b> $keep_files");
	$keep_files = explode(',',$keep_files);

	rrmdir($public_dir,$keep_files);

	e('---------------');

	e("<b>Extracting :</b> $locat_zip");
	unzip($locat_zip,$extract_dir,false);

	e('---------------');

	$htdoc_dir=get_first_dir($extract_dir)."/$htdoc_dir";
	e("<b>Move Dir :</b> $extract_dir/$htdoc_dir/* <b>to</b> $public_dir/");
	move_dir("$extract_dir/$htdoc_dir",$public_dir,$keep_files);

	e('---------------');

	e("Delete tmp : $locat_zip");
	unlink($locat_zip) or death("Error in deletting $locat_zip");
	e("<b>Removing tmp :</b> $extract_dir");
	rrmdir($extract_dir);
?>	
</pre>

</body>
</html>