<!-- by prem kumar singh @ 2015/10/29 -->
@extends('index')
@section('content')
  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Registration</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li><a href="{{url()}}">Home</a> <span class="divider">/</span></li>
            <!-- <li><a href="#">Pages</a> <span class="divider">/</span></li> -->
            <li class="active">Registration</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->  
  
<section id="registration-page" class="container">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  
    <form class="center" method="POST" action="{{ url('authentication/register') }}">
    @if(Session::has('success_message'))
      <div class="alert alert-success">
        {{Session::get('success_message')}}
      </div>
    @endif
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <fieldset class="registration-form">
        <div class="control-group">
          <!-- Username -->
          <div class="controls">
            <input type="text" required name="name" value="{{ old('name')}}" placeholder="Name" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">
            <input type="email" id="email" name="email" value="{{ old('email')}}" placeholder="E-mail" class="input-xlarge">
          </div>
        </div>
        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">
            <input type="number" min="1000000000000" max="9999999999999" name="mobile" value="{{ old('mobile')}}" placeholder="Mobile No.(e.g. 9779811111111)" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Password -->
          <div class="controls">
            <input type="password" id="password_confirm" name="password_confirmation" placeholder="Password (Confirm)" class="input-xlarge">
          </div>
        </div>
        <div class="control-group">
          <!-- Password -->
          <div class="controls">
            @if(old('how_know'))
            <textarea placeholder="How do you know about us?" name="how_know"   class="input-block-level">{{ old('how_know') }}</textarea>
            @else
            <textarea placeholder="How do you know about us?" name="how_know"  class="input-block-level"></textarea>
            @endif
            
          </div>
        </div>

        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success btn-large btn-block">Register</button>
          </div>
        </div>
      </fieldset>
    </form>
  </section>
  <!-- /#registration-page -->

@endsection
