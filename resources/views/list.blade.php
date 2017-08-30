@foreach ($url_shorteners as $url_shortener)
Short URL: <a href="http://localhost:8001/r/{{$url_shortener->short_url_id}}">http://localhost:8001/r/{{$url_shortener->short_url_id}}</a><br>
Long URL: <a href="{{$url_shortener->long_url}}">{{$url_shortener->long_url}}</a><br>
Count: {{$url_shortener->calling_count}}<br>
<hr>
@endforeach
