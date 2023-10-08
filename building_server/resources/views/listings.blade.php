<h1>{{$heading}}</h1>
@if(count($listings) == 0)
<h2> No listings Found </h2>
@endif
@foreach($listings as $listing)
<a href = "/listings/{{$listing['id']}}">
    <h2>{{$listing["title"]}}</h2>
</a>
<p>{{$listing["desc"]}}</p>
@endforeach