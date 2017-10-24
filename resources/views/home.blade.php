@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>
                    <a href="{{url('/create_topic')}}">Create Topic</a>
                    <div class="col-md-4">
                        <ul class="list-group">
                             <li class="list-group-item">Recent Topics<span class="badge">12</span></li>
                             <li class="list-group-item">Recent Comments <span class="badge">5</span></li> 
                             <li class="list-group-item">New users<span class="badge">3</span></li> 
                         </ul>
                    </div>

                     <div class="col-md-8">
                        <ul class="list-group">
                             <li class="list-group-item">Why Drupal is better than Wordpres?<span class="badge">3</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
