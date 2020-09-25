<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    private $produto;

    //Criando metodo constutor
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Listagem de Produtos';
        $produtos = $this->produto->all();
        return view('Produtos', compact("produtos", "title"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Apagando Valores

    }

    //Método extra para testes de inserçao
    public function testes_create()
    {
        //Metodo 1 de insercao
        /*$prod = $this->produto;
        $prod->name = 'Narnia';
        $prod->descricao = 'Livro de fantasia';
        $prod->preco = '15';
        $insert = $prod->save();

        if($insert)
            return "Inserido com sucesso";
        else
            return "Erro no momento de insercao";
        */
        //Metodo 2 de insercao
        //não funciona os metodos de timestamp
        /* Perigoso por questao de seguranca
        $insert = $this->produto->insert([
                        'name'=> 'Nome do Livro 2',
                        'descricao'=> 'Livro e sua categoria',
                        'preco'=> '15'
                    ]);
        */
        //Metodo 3
        $insert = $this->produto->create([
            'name'=> 'Nome do Livro 4',
            'descricao'=> 'Livro e sua categoria',
            'preco'=> '15'
        ]);

        if($insert)
            return "Inserido com sucesso, com o ID:{$insert->id}";
        else
            return "Erro no momento de insercao";
    }

       //Método extra para testes de inserçao
       public function testes_update()
       {
            //Retornando um item pelo seu id
           /* $produ = $this->produto->find(5);
            dd($produ->name);*/
            //Metodo 1
            /*
            $p = $this->produto->find(5);
            $p->name = 'Senhor dos aneis - elisa';
            $p->descricao = 'Livro de fantasia';
            $p->preco = '55';
            $update = $p->save();
            */
            //metodo 2
            /*
            $prod = $this->produto->find(6);
            $update = $prod->update([
                'name'=> 'O nome da rosa',
                'descricao'=> 'historia'
                ]);
            if($update)
                return "Alterado com sucesso";
            else
                return "Falha ao alterar";
            */
            //metodo 3
            $prod = $this->produto->where('preco', '=', 55);
            $update = $prod->update([
                'name'=> 'Senhor dos aneis',
                'descricao'=> 'historia'
                ]);
            if($update)
                return "Alterado com sucesso";
            else
                return "Falha ao alterar";
       }
       //Metodo delete
       public function testes_deletar(){
           //Metodo 1
           /*$prod = $this->produto->find(2);
           $delete = $prod->delete();
           */
           //Metodo 2
           //$delete = $this->produto->destroy(1);
           //Metodo 3
           $delete = $this->produto->where('preco', 55)->delete();
           if($delete)
                return "Deletado com sucesso";
            else
                return "Falha ao deletar";
       }
}
