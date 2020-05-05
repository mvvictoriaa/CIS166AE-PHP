<?php // Finals - index.php 

// Define a page title and include the header:
define('TITLE', 'Display Files in a Directory');
include('header.html');

// Set the timezone:
date_default_timezone_set('MST');

// print the current time:
if(isset($_GET['id'])){
	echo '<p class="success">Welcome, ' . '<b>' . $_GET['id'] . '.' . '</b>' . '&#9786;' . date('G:i e') . '</p>';
} else {
	echo '<p class="success">Welcome to Shoppee Coffee! &#9786; ' . date('G:i e') . '</p>';
}

// Set the directory name and scan it:
$search_dir = '.';
$contents = scandir($search_dir);

//List the directories first...
//Print a caption and start a list:
print '<h2>Directories</h2>
<h3>';
foreach ($contents as $item) {
	if ( (is_dir($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.') ) {
		print '' . $item . '&emsp;';
	}
}

print '</h3>'; // Close the list.

// Create a table header:
print '<hr><h2>Files</h2>
<table cellpadding="2" cellspacing="2" align="left">
<tr>
<th><h3>Name</h3></th>
<th><h3>Size</h3></th>
<th><h3>Last Modified</h3></th>
</tr>';

// List the files:
foreach ($contents as $item) {
	if ( (is_file($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.') ) {
		
		// Get the file size:
		$fs = filesize($search_dir . '/' . $item);
		
		// Get the file's modification date:
		$lm = date('F j, Y', filemtime($search_dir . '/' . $item));
		
		// Print the information:
		print "<tr><td>$item</td>
				<td>$fs bytes</td>
				<td>$lm</td></tr>\n";
	}	// Close the IF.
}	// Close the FOREACH.

print '</table>'; // Close the HTML table.

print '<br>';

?>