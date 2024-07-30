<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Models\Categoria;
use App\Http\Requests\StoreVideogame;
use App\Mail\VideogameMail;
use Illuminate\Support\Facades\Mail;
class GamesController extends Controller
{
    public function index(){
        // $videogames = array('Fifa 24', 'NBA 24', 'NFL 24', 'Mario Kart', 'Super Mario', 'COD');
        $videogames = Videojuego::orderBy('id','desc')->get();
        return view('index', ['games' => $videogames]);
    }

    public function create(){
        $categorias = Categoria::all();
        return view('create', ['categorias' => $categorias]);
    }

    public function help($name_game, $categoria = null){
        $date = now();
        return view('show', [
            'nameVideogame' => $name_game,
            'categoryGame' => $categoria,
            'fecha' => $date
        ]);
    }
    public function storeVideojuego(StoreVideogame $request){

        Videojuego::create($request->all());

        foreach (['franciscojaredllopez@gmail.com'] as $recipient){
            Mail::to($recipient)->send(new VideogameMail());
        }
    

        return redirect()->route('games');
        
    }
    public function view($game_id){
        $game = Videojuego::find($game_id);
        $categorias = Categoria::all();
        return view('update', ['categorias' => $categorias, 'game'=>$game]);
    }
    public function updateVideojuego(Request $request){
        $request->validate([
            'nombre'=>'required|min:5|max:10'
        ]);
        $game = Videojuego::find($request->game_id);
        $game->nombre = $request->name_game;
        $game->categoria_id = $request->categoria_id;
        $game->activo = 1;
        $game->save();

        return redirect()->route('games');
        
    }
    public function delete($game_id){
        $game = Videojuego::find($game_id);
        $game->delete();
        return redirect()->route('games');
    }
}
