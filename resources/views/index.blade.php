<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Best Writing Solution</title>

    <!-- Bootstrap -->
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/bootstrap-social.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::style('css/style.css')!!}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ url('img/logo4.png') }}"></a>
        <div class="pull-right">
          <a class="navbar-brand" href="myaccount.php">
            <button type="button" class="btn btn-sm">My Account</button>
          </a>
            <button type="button" class="navbar-toggle new-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        </div>
        
      
      
        <div class="container">
        <div class="row">

        </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="text-center"> <a href="{{url('')}}">HOME</a></li>
              <li class="text-center"> <a href="{{url('about')}}">ABOUT US</a></li>
              <li class="text-center"> <a href="{{url('service')}}">SERVICES</a></li>
              <li class="text-center"> <a href="{{url('whyus')}}">WHY US</a></li>
              <li class="text-center"> <a href="{{url('howitwork')}}">HOW IT WORKS</a></li>
              <li class="text-center"> <a href="{{url('faq')}}">FAQ</a></li>
              <li class="text-center"> <a href="{{url('contact')}}">CONTACT</a></li>
              <li class="text-center">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MORE<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="text-center"> <a href="#">ORDER</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="text-center"> <a href="">PRICE</a></li>
                  </ul>
              </li>
            </ul>
          </div>
      </div>

          
      </div>
    </div>

    <!-- main Body Start -->
    <div class="container">
      <div class="maincontents">
    @yield('content')

      </div>
    </div>
</div>
  
    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <i style="line-height: 2.5"></ul>Copyright &copy; 2015 <a href="http://omnitextsolution.com">Omni Text Solution</a>. All Rights Reserved.</i>
        <div class="pull-right">
          
          Follow Us:
          <a href="http://facebook.com/" class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
          <a href="https://twitter.com/" class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
          <a href="http://www.gmail.com/" class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><span class="fa fa-google-plus"></span></a>
          <a href="http://www.yahoomail.com/" class="btn btn-social-icon btn-yahoo" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-yahoo']);"><span class="fa fa-yahoo"></span></a>
          &#160 &#160 &#160
          <a href="#">
            <button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
            </button>
          </a>
        </div>
      </div>
    </nav>

    
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
  </body>
</html>
