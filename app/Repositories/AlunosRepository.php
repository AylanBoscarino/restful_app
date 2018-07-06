<?php 
namespace App\Repositories;

use App\Repositories\InterfaceAlunos;
use App\Aluno;
class AlunosRepository implements InterfaceAlunos
{
	    public function index(){
    	return Aluno::get();
    }

    public function find($id){
    	return Aluno::find($id);
    }

    public function store($request){
    	$aluno = Aluno::create([
    		'name' => $request->name,
    		'class' => $request->class,
    	]);
    	$aluno->save();
    	return redirect(route('lista')) ;
    }

    public function update($request, $id){
		$aluno = Aluno::find($id);
		
		$aluno->name = $request->name;
		$aluno->class = $request->class;
    	$aluno->save();
    	return $this->lista();
    }

    public function destroy($id){
        $aluno = Aluno::find($id);
        $aluno->delete();
        return url(route('lista'));
	}
	
	public function lista(){
		return view('includes.list')->with( [ 'lista' => $this->index()] );
	}

	public function create(){
		return view('includes.register');
	}

	public function edit($request, $id){
		$aluno = Aluno::find($id);
		return view('includes.register')->with(['aluno' => $aluno]);
	}
}
