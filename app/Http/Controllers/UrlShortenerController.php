<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UrlShortener;

class UrlShortenerController extends Controller
{
    public function index() {
      $url_shorteners = UrlShortener::all();

      return view('index', [ 'url_shorteners' => $url_shorteners ]);
    }

    public function create() {
      return view('create');
    }

    public function store(Request $request) {

      if (empty($request['customized_short_url_id'])) {
        UrlShortener::insert([
          'short_url_id' => (new \App\UrlShortener\RandomGenerator\NaiveAlgorithm())->getString(8),
          'long_url' => $request['long_url']
        ]);
      } else {
        UrlShortener::insert([
          'short_url_id' => $request['customized_short_url_id'],
          'long_url' => $request['long_url']
        ]);
      }

      return redirect('/url-shorteners/create');
    }

    public function redirect($short_url_id) {
      $url_shortened = UrlShortener::where('short_url_id', $short_url_id)->first();

      UrlShortener::where('short_url_id', $short_url_id)->increment('calling_count');

      if (!$url_shortened) {
        die('URL not valid');
      }

      return redirect($url_shortened->long_url);
    }

    public function list() {
      $url_shorteners = UrlShortener::all();

      return view('list', [ 'url_shorteners' => $url_shorteners ]);
    }
}
