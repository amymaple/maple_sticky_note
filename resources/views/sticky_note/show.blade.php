


<h1>{{$sticky_note->title}}</h1>

@foreach ($sticky_note->items as $item)
    
    <p>{{$item->text}} </p>
    <p>{{$item->cost_exact}} </p>
@endforeach