<?PHP
 
	/*
		Autor - Regz.pl
 
		Example:
			# Create file templates/index.php with content

			TEMPLATE('index');
 
			$TEMPLATE = RENDER('index');
	*/
 
	DEFINE('__DS__', DIRECTORY_SEPARATOR);
	DEFINE('__TEMPLATES__', __DIR__ . __DS__ . 'templates');
 
	FUNCTION TEMPLATE($NAME, $VARS = [])
	{
		EXTRACT($VARS);
		INCLUDE __TEMPLATES__ . __DS__ . $NAME . '.tpl.php';
	}
 
	FUNCTION RENDER($N, $V = [])
	{
		OB_START(); 
		TEMPLATE($N, $V);  
		$T = OB_GET_CONTENTS(); 
		OB_END_CLEAN();
 
		RETURN $T;
	}
