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

 
                <?php $counter = 0; ?>
                <?php $closeBrackets= 0; ?>

                @foreach ($sticky_notes as $sticky_note) 
                    
                    @if($counter % 2 == 0  || $counter == 0   )
                    
                        <div class="row"  >
                    @endif

                    
                    <div class="col"  >

                        <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">{{$sticky_note->title}} </div>
                            <div class="card-body text-primary">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">{{$sticky_note->description}}</p>
                            </div>
                        </div>

                    </div >
                    
                    
                    @if($closeBrackets )
                        </div >
                    @endif

                    <?php $closeBrackets= 1; ?>
                    <?php $counter++; ?>
                @endforeach




 
        </div>
    </div>
</div>
@endsection
