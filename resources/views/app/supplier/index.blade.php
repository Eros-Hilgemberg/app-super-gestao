<h1>Fornecedores</h1>

Fornecedor: {{$suppliers[0]['name']}} <br>
Status: {{$suppliers[0]['status']}}

{{-- @unless($suppliers[0]['status'] == 'S')
    <p>Este fornecedor está inativo</p>
@endunless --}}