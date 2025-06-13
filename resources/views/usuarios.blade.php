<x-app title="Usuários">
    <div class="row">
        <div class="col-4">
            <x-adminlte-info-box title="Clientes" text="{{ $total }}" icon="fas fa-lg fa-users text-dark"
                theme="gradient-teal" />
        </div>
        <div class="col-4">
            <x-adminlte-info-box title="Técnicos" text="{{ $tecnicos }}" icon="fas fa-lg fa-screwdriver text-dark"
                theme="gradient-primary" />
        </div>
        <div class="col-4">
            <x-adminlte-info-box title="Admins" text="{{ $admins }}" icon="fas fa-lg fa-user-cog text-dark"
                theme="gradient-white" />
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped text-white">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Permissões</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>

                                <button type="submit" class="btn btn-link @if($usuario->tecnico) text-teal @else text-navy @endif" url="{{ route('changeTecnico', ['user' => $usuario]) }}">
                                    <i class="fas fa-screwdriver"></i>
                                </button>
                                <button class="btn btn-link @if($usuario->admin) text-teal @else text-navy @endif" url="{{ route('changeAdmin', ['user' => $usuario]) }}">
                                    <i class="fas fa-user-cog"></i>
                                </button>


                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <form action="#" method="post" id="change-user">
                @csrf
            </form>
        </div>
    </div>
@push('js')
<script>
    document.querySelectorAll('table button.btn').forEach(element => {
        element.addEventListener('click',function(event){
            const form = document.getElementById('change-user');
            form.action = event.currentTarget.getAttribute('url');
            form.submit();
        });
    });
    
</script>
@endpush
</x-app>