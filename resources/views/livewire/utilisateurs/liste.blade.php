<div class="row p-4 pt-5">
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-primary d-flex align-items-center">
    <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i> Liste des utilisateur</h3>
    <div class="card-tools d-flex align-items-center">
        <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddUser()"><i class="fas fa-user-plus"></i> Nouvelle utilisateur</a>
    <div class="input-group input-group-md" style="width: 250px;">
    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    <div class="input-group-append">
    <button type="submit" class="btn btn-default">
    <i class="fas fa-search"></i>
    </button>
    </div>
    </div>
    </div>
    </div>

    <div class="card-body table-responsive p-0 table-striped">
     <table class="table table-hover text-nowrap">
    <thead>
    <tr>
    <th style="width:5%;"></th>
    <th style="width:25%;">Utilisateur</th>
    <th style="width:20%;">Role</th>
    <th style="width:20%;" class="text-center">Ajouté</th>
    <th style="width:30%;" class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
@foreach ($users as $user )


    <tr>
    <td>{{ $user->sexe }}</td>
    <td>{{ $user->prenom }} {{ $user->nom }}</td>
    <td>{{ $user->profils->implode("libProfil",' | ') }}</td>
    <td class="text-center"><span class="tag tag-success" class="text-center">{{ $user->created_at ->diffForHumans()}}</span></td>
    <td class="text-center">
        <button class="btn btn-link"> <i class="far fa-edit"></i></button>
        <button class="btn btn-link" wire:click="confirmDelete('{{ $user->prenom }} {{ $user->nom }}')"> <i class="far fa-trash-alt"></i></button>
    </td>
    </tr>

@endforeach
    </tbody>
    </table>
    </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>

    </div>
    </div>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script>
                
    </script>

