<?

if ( $action == 'index' ) {
	
	
	$data['content'] = loadTemplate('home.tpl.php',$tData);
}

if ($action == 'import' ) {
	
	$data['content'] = loadTemplate('import.tpl.php',$tData);
}

if ($action == 'import_data') {	
	if ($_FILES['upload']['tmp_name']) {
		$qrs = file_get_contents($_FILES['upload']['tmp_name']);
		executeQueryi($qrs);
		
		$_SESSION['message'] = 'Data Imported';
	} else {
	
		$_SESSION['error'] = 'Data Failed to Upload';
	}
	redirectBack();
}