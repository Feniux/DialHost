<!DOCTYPE html>
<html lang="pt-br">
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DialHost</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset( '/lib/bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset( '/lib/font-awesome/css/font-awesome.min.css' )}}">
    <link rel="stylesheet" href="{{ asset( '/lib/simple-line-icons/css/simple-line-icons.css' )}}">
    <link rel="stylesheet" href="{{ asset( '/lib/device-mockups/device-mockups.min.css' )}}">

    <!-- Theme CSS -->
    <link href="{{ asset( '/css/new-age.min.css' )}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">DialHost</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#">Quem Somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Contate-nos!</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h3>Cadastre-se!</h3>
                            <h4>Receba nosso material em seu e-mail!</h4>
                            <!-- <a href="#" class="btn btn-outline btn-xl page-scroll">Start Now for Free!</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">                        
                        <div class="device">                            	
                            <div class="container-fluid">
		                    	<div class="row">
		                    		<div class="row-fluid">
		                    			<div class="form">
		                    				<div class="row">
						                    	<div class="panel">
						                        	@yield('content')
						                        </div>
						                    </div>
		                    			</div>
		                    		</div>
		                    	</div>
		                    </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </header>

		<footer>
	        <div class="container">
	            <p>&copy; Teste realizado para a DialHost por <strong>Weslley Guilherme Lage</strong>.</p>
	            <ul class="list-inline">
	                <li>
	                    <a href="https://www.linkedin.com/in/weslleyglage/" target="_blank">LinkedIn</a>
	                </li>
	                <li>
	                    <a href="https://github.com/feniux" target="_blank">GitHub</a>
	                </li>
	            </ul>
	        </div>
	    </footer>

	    
	    <!-- jQuery -->
	    <script src="{{ asset ( '/lib/jquery/jquery.min.js ')}}"></script>

	    <script src="{{ asset ( '/js/app.js' ) }}"></script>
		<script src="{{ asset('/js/jquery.maskedinput.min.js') }}"></script>
		<script src="{{ asset('/js/custom_landing.js') }}"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="{{ asset ( '/lib/bootstrap/js/bootstrap.min.js ')}}"></script>

	    <!-- Plugin JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	    <!-- Theme JavaScript -->
	    <script src="{{ asset ( '/js/new-age.min.js' )}}"></script>
	</body>
</html>