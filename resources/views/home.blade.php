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

                <!--********************************************-->
                <?php $counter = 0; ?>
                <?php $closeBrackets= 0; ?>
                @foreach ($sticky_notes as $sticky_note)
                    @if($counter % 2 == 0  || $counter == 0)
                        @if( $counter != 0) 
                            </div>
                        @endif  
                        <div class="row"  >
                        <?php $closeBrackets= 1; ?>
                    @endif
                        <div class="col" style="margin:6px"  >
                            <div class="card border-primary mb-3" style="max-width: 18rem; height: 100%; margin:2px">
                                <div class="card-header">{{$sticky_note->title}} </div>
                                <div class="card-body text-primary">
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">{{$sticky_note->description}}</p>
                                </div>
                            </div>
                        </div>
                    <?php $counter++; ?>
                @endforeach
                <!--********************************************-->


                <div class="row"  >
                    <div class="col" style="margin:6px"  >
                        <div class="card border-primary mb-3"  style="max-width: 18rem;border-style: dashed;border-width: 2px;height: 100%; margin:2px">
                            <div class="card-header">owo </div>
                            <div class="card-body text-primary"> 
                                <i class="fa fa-plus-circle"style="margin-left:50%; margin-right:50%; " ></i>
                            </div>
                        </div>
                    </div> 
                    
                </div> 


 
        </div>
    </div>
</div>
@endsection
