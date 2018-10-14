<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Game;
class GameController extends Controller
{
    //
    public function index(){
        $games= Game::all();
        return view ('index' , compact('games'));
    }
    public function create(){
        return view ('create');
    }
    public function handlecreate(Request $request){
        $game = new Game();
        $game->title = $request->input('title');
        $game->publisher = $request->input('publisher');
        $game->completed = $request->input('complete'); 
        $game->user_id = Auth::user()->id;
        $game->save();
session()->flash('msg' , 'Game has been Created'); 
return redirect('/');

    }
    public function edit($game){
        $game = Game::find($game);
        return view ('edit',compact('game'));
    }
    public function handleedit(Request $request , $game){
        $gameUpdate = Game::where('id', $game)->update(
            [
'title'=>$request->input('title'),
'publisher'=>$request->input('publisher'),
'completed'=>$request->input('completed'),
'user_id'=> Auth::user()->id,
            ]
            );
            if ($gameUpdate){
                session()->flash('msg' , 'Game has been Updated'); 
                return redirect('/');   
            }
}
public function delete($game){
$del_game = Game::destroy($game);

if ($del_game){
    session()->flash('msg' , 'Game has been Deleted'); 
    return redirect('/');   
}
}
}