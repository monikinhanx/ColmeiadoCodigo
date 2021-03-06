@extends('layouts.areaDoAluno')

@section('titulo', 'Área do Aluno - Lógica')

@section('conteudo')
    <section class="conteudo flex-grow-1">
        <h1 class="titulo">Variáveis</h1>
        <h3 class="subtitulo">O que são variáveis?</h3>
        <div class="conteudo-curso">            
            <p>Uma variável referencia a um espaço na memória do computador utilizado para guardar um valor, dar um nome às informações que serão usadas em seus programas. Como o próprio nome já diz, as váriáveis podem sofrer alterações em seus valores, elas não possuem um valor fixo.</p>
            <p>Por exemplo, imagine que a memória de seu computador é um armário com 100 gavetas e você guarda cada tipo de objeto em uma gaveta diferente. Provavelmente você vai querer criar etiquetas para referenciar o que guarda em cada gaveta. Suponha que há uma gaveta "Meias" com 2 meias; se necessário, pode-se adicionar mais 5 meias e, caso seja um colecionador, até 200. Assim a gaveta "Meias" muda o seu valor.</p>
            <p>Para criar uma variável, utiliza-se <strong>var</strong> e, para determinar o seu valor, o operador de atribuição <strong>(=)</strong>. Para facilitar a compreensão do código, deve-se sempre escolher um nome que identifique o tipo de dado a ser armazenado.</p>
        </div>
        <a href="/quiz_variavel" class="btn btn-warning btn-curso text-center">teste seus conhecimentos</a>

    </section>    
@endsection