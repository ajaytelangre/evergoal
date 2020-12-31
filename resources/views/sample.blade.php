<h1>this is sample</h1>

@foreach($data1 as $data)

{{__($data->id)}}
@if(in_array($data->id,$count_level21))
{{__("level 1")}}
@elseif(in_array($data->id,$count_level31))
{{__("level 2")}}
@elseif(in_array($data->id,$count_level41))
{{__("level 3")}}
@elseif(in_array($data->id,$count_level51))
{{__("level 4")}}
@endif
@endforeach