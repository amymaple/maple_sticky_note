@extends('layouts.app')
@section('content')




<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center"> 


        
        

        <div class="card   border-primary   mb-3"  
            style=" border-style: dashed;border-width: 2px;height: 100%; margin:2px; border-radius: 6px; border-color :azure">
            <div class="card-header"   > {{$sticky_note->title}}  </div>
            <?php $counterItem = 0; ?>
            @foreach ($sticky_note->items as $item)
                <div> 
                    <p class="card-text "  style="display:inline-block;"  > {{$item->text}}   </p>
                    <div class="card-text" style="float:right;">  
                        @if( $item->cost_exact !=null )
                            {{$item->cost_exact}} 
                        @elseif ( $item->cost_approx_min!=null && $item->cost_approx_max!=null)
                            [{{$item->cost_approx_min}}  , {{$item->cost_approx_max}}  ]
                        @else 
                            No price specified 
                        @endif
                    </div>
                </div>
                <?php $counterItem++; ?>
            @endforeach
        </div> 

        <a href="{{ url('/home') }}" >
            <button type="button" class="btn btn-primary" >
                <span class="fa fa-angle-left "></span> 
                    Return 
            </button>
        </a>
    </div>
</div>
@endsection