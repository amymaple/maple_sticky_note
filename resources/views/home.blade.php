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
                        <div  class="card border-primary mb-3 one_sticky_note" style="max-width: 18rem; height: 100%; margin:2px; border-radius: 6px">
                                <div class="card-header">{{$sticky_note->title}} 
                                    <i class="material-icons delete_sticky_note fa fa-trash" style="float:right;"></i> 
                                </div>
                            <div class="card-body text-primary">
                                <input hidden type="text" id="id_sticky_note"  value="{{$sticky_note->id}}" class="id_sticky_note"> 
                                <h4 class="card-title">{{$sticky_note->description}}</h4>
                                <?php $counterItem = 0; ?>
                                @foreach ($sticky_note->items as $item)
                                    <p class="card-text"  >
                                        @if($counterItem < 2 )
                                            {{$item->text}}
                                        @else 
                                            ...
                                            @break 
                                        @endif
                                    </p>
                                    <?php $counterItem++; ?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                <?php $counter++; ?>
            @endforeach
            <!--********************************************-->
            <div class="row"  >
                <div class="col" style="margin:6px">
                    <div class="card   border-primary   mb-3"  style="max-width: 18rem;border-style: dashed;border-width: 2px;height: 100%; margin:2px; border-radius: 6px; border-color :azure">
                        <div class="card-header"   >Add a new sticky note</a> </div>
                        <div id="add_sitcky_note"class="card-body text-primary"> 
                            <i class="fa fa-plus-circle"style="margin-left:50%; margin-right:50%; " ></i>
                        </div>
                    </div>
                </div> 
            </div>
            <!--********************************************-->
        </div>
    </div>
</div>


@endsection