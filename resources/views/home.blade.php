@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

 
                

                @foreach ($sticky_notes as $sticky_note) 
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{$sticky_note->title}} </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">{{$sticky_note->description}}</p>
                        </div>
                    </div>
                @endforeach





 
        </div>
    </div>
</div>
@endsection
