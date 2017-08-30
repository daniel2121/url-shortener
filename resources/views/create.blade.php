<form method="POST" action="/url-shorteners">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <input type="text" name="long_url" placeholder="Place a link to shorten it">
  <input type="submit" value="SHORTEN"><br>
  <input type="text" name="customized_short_url_id" placeholder="Set the ID(Optional)">
</form>
