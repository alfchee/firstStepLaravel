<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
Use App\Song;

class SongsController extends Controller {

    /**
     * Song model
     * @var [type]
     */
    private $song;

    public function __construct(Song $song) {
        $this->song = $song;
    }//__construct()

    /**
     * index of Songs
     * @return [type]
     */
    public function index() {
        $songs  = $this->song->get();

        return view('songs.index',compact('songs'));
    }//index()

    /**
     * show of Songs
     * @param  [type]
     * @return [type]
     */
    public function show($slug) {
        $song = $this->song->whereSlug($slug)->first();

        return view('songs.show',compact('song'));
    }//show()

    /**
     * edit a Song
     * @param  string $slug
     * @return [type]
     */
    public function edit($slug) {
        $song = $this->song->whereSlug($slug)->first();

        return view('songs.edit',compact('song'));
    }

}
