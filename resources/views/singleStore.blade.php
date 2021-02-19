@extends('layout')

@section('content')


<div class=container>
<div class="row">
<div class="col-lg-8">

<h1> Store products </h1>
<p> Please fill the details to order products online </p>
<form method="POST" action="{{route('OrderSubmissionDone')}}">
@csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">

  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="product">product</label>
    <input type="text" class="form-control" id="product" name="product">

  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-lg-4">
<aside>
<h1> Slide bar </h1>
<p> This is our side bar </p>
<p> It may include a map or something here </p>
</aside>
</div>
</div>
</div>

@endsection
