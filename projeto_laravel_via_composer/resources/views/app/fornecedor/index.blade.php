<h3>Fornecedor</h3>

{{-- fica aqui o comentário --}}

{{-- {{ 'Teste' }} --}}
{{-- <?= 'Teste' ?> --}}

@php
    //Para comentários de uma linha 

    /* 
        Comentários de várias linhas 
    
    */

@endphp

{{-- @dd($fornecedores) --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados.</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados.</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif --}}

{{-- Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br> --}}

{{-- @if($fornecedores[0]['status'] == 'N')
    Fornecedor inativo
@endif --}}

{{-- @if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif --}}

{{-- @unless($fornecedores[0]['status'] == 'S') //verifica se a condição é negativa
    Fornecedor inativo
@endunless --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['CNPJ'] }}
    <br>
@endisset

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['CNPJ'])
        CNPJ: {{ $fornecedores[1]['CNPJ'] }}
    @endisset
    <br>
@endisset