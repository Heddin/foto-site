@extends('layouts.app')

@section('main')
    <main class="valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s8 offset s2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                                <form action="{{route('logout')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="submit" value="Logout" class="btn grey lighten-1 black-text">
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
