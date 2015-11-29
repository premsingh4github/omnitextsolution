<!-- by prem kumar singh @ 2015/10/29 -->
@extends('index')
@section('content')
  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Login</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li><a href="{{url()}}">Home</a> <span class="divider">/</span></li>
            <!-- <li><a href="#">Pages</a> <span class="divider">/</span></li> -->
            <li class="active">Login</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->  
  
<section id="registration-page" class="container">
  @if (count($errors) > 0)
            <div class=" alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

  
    <form class="center" method="POST" action="{{ url('authentication/login') }}">
    @if(Session::has('success_message'))
      <div class="alert alert-success">
        {{Session::get('success_message')}}
      </div>
    @endif
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <fieldset class="registration-form">
        

        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">

            <input type="email" id="email" name="email" value="{{ old('email')}}" placeholder="E-mail" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
          </div>
        </div>
        
        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success btn-large btn-block">Login</button>
          </div>
        </div>
      </fieldset>
    </form>
  </section>
  <!-- /#registration-page -->

@endsection
