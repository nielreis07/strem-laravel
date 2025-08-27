<x-layout title="Pagina Inicial">
    <div class="container">
        <h1>Pagina Inicial</h1>
        <a href="{{ route('/') }}">Ir para a pagina de strem</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Conta</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('conta.add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</x-layout>