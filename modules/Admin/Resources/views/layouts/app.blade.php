<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Module Admin</title>
		{!!Html::style('../modules/Admin/Assets/bower_components/bootstrap/dist/css/bootstrap.min.css')!!}
		{!!Html::style('../modules/Admin/Assets/bower_components/metisMenu/dist/metisMenu.min.css')!!}
		{!!Html::style('../modules/Admin/Assets/dist/css/timeline.css')!!}
		{!!Html::style('../modules/Admin/Assets/dist/css/sb-admin-2.css')!!}
		{!!Html::style('../modules/Admin/Assets/bower_components/morrisjs/morris.css')!!}

		{!!Html::style('../modules/Admin/Assets/bower_components/font-awesome/css/font-awesome.min.css') !!}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		
		@yield('content')

		<!-- jQuery -->
    {!!Html::script('../modules/Admin/Assets/bower_components/jquery/dist/jquery.min.js')!!}

    <!-- Bootstrap Core JavaScript -->
	{!!Html::script('../modules/Admin/Assets/bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
    <!-- Metis Menu Plugin JavaScript -->
	{!!Html::script('../modules/Admin/Assets/bower_components/metisMenu/dist/metisMenu.min.js')!!}
    <!-- Morris Charts JavaScript -->
    {!!Html::script('../modules/Admin/Assets/bower_components/raphael/raphael-min.js')!!}
    {!!Html::script('../modules/Admin/Assets/bower_components/morrisjs/morris.min.js')!!}
    {!!Html::script('../modules/Admin/Assets/js/morris-data.js')!!}
    <!-- Custom Theme JavaScript -->
    {!!Html::script('../modules/Admin/Assets/dist/js/sb-admin-2.js')!!}
	</body>
</html>