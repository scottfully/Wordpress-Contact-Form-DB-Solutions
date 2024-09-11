<?php

// Prevent the specified forms from being saved to the database in the cfdb wordpress plugin
// The email functionality will still work as normal in the contact form 7 form that is not being saved

// The following code should be included directly in the wordpress functions.php file
// OR by including the file in the functions.php file
// e.g. include_once('prevent_cfdb_form_save.php');

function prevent_form_save($formData) {
	
	// Add a list of form titles that will not get saved to the database
	// e.g. $prevent_form_save_titles = array('Test Form 1', 'Test Form 2');

	$prevent_form_save_titles = array();
	
	if($formData && in_array($formData->title, $prevent_form_save_titles)) {
		return null;
	}
	
	return $formData;
}

add_filter('cfdb_form_data', 'prevent_form_save');
