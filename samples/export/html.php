<?php
	require_once("../config.php");
	$res=mysql_connect($mysql_server,$mysql_user,$mysql_pass);
	mysql_select_db($mysql_db);
	

	require("../../codebase/grid_connector.php");
	require("../../codebase/convert.php");
	
	$convert = new ConvertService("http://dhtmlxgrid.appspot.com/export/html");
	$convert->excel();

	$grid = new GridConnector($res);
	$grid->set_config(new GridConfiguration());
	$grid->render_table("grid50");
?>