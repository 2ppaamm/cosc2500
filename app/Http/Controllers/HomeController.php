<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Questions;
use Paste\Pre;
/**
 * @Middleware("guest", except={"logout"})
 */
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| Controller methods are called when a request enters the application
	| with their assigned URI. The URI a method responds to may be set
	| via simple annotations. Here is an example to get you started!
	|
	*/

    /**
     * @Get("/")
     */
    public function index()
    {
        $questionsr = Questions::orderByRaw("RAND()")->where('type','=','sr')->take(5)->get(); //pick 5 sensitivity to rewards questions
        $questionsp = Questions::orderByRaw("RAND()")->where('type','=','sp')->take(5)->get(); //pick 5 sensitivity to punishment questions
        return view('index', compact('questionsr', 'questionsp'));
    }

    /**
     * @Get("/testjava")
     */
    public function java()
    {
        return view('hello');
    }

}
