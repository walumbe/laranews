<h1>{{$heading}}</h1>

@unless (count($blogs) == 0)
@foreach ($blogs as $blog)
<h2>
    {{$blog['title']}}
</h2>
<p>
    {{$blog['body']}}
</p>
@endforeach
@else 
<h1>No Listings Found!</h1>
@endunless

