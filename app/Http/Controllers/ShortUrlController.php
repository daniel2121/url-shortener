<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShortUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $short_urls = \App\ShortUrl::all();

        return view('index', ['short_urls' => $short_urls]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $short_url = new \App\ShortUrl();
      $short_url->url_id = (new \App\UrlShortener\RandomGenerator\NaiveAlgorithm)->getString(8);
      $short_url->reference = $request['reference'];
      $short_url->save();

      return redirect('/short-urls');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url_id)
    {
        $clicks = \App\Click::where('url_id', $url_id)->get();

        // return $clicks;
        return view('show', ['clicks' => $clicks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($url_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $url_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($url_id)
    {
        //
    }

    public function redirect($url_id)
    {
      $url_shortened = \App\ShortUrl::where('url_id', $url_id)->first();

      if (!$url_shortened) throw new Exception('URL not valid');

      $click = new \App\Click();
      $click->url_id = $url_id;
      $click->user_agent = $_SERVER['HTTP_USER_AGENT'];
      $click->ip = $_SERVER['REMOTE_ADDR'];
      $click->save();

      return redirect($url_shortened->reference);
    }
}
