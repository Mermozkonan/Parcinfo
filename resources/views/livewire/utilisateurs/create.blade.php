<div class="row p-4 pt-5">
    <div class="col-md-6">
        <div>
            <div class="alert alert-primary" role="alert">
                A simple primary alert—check it out!
            </div>
        </div>

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de creation d'un nouvel utilisateur</h3>
            </div>

            <form wire:submit.prevent="addUser()">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control @error('newUser.nom')

                                is-invalid  @enderror" wire:model="newUser.nom" >
                                @error("newUser.nom")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Prenom</label>
                                <input type="text" class="form-control @error('newUser.nom')

                                is-invalid  @enderror"  wire:model="newUser.prenom">
                                @error("newUser.prenom")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control @error('newUser.telephone')

                        is-invalid  @enderror "  wire:model="newUser.telephone">
                        @error("newUser.telephone")
                        <span class="text-danger">{{ $message }}</span>
                      @enderror

                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control @error('newUser.email')

                        is-invalid  @enderror" wire:model="newUser.email">
                        @error("newUser.email")
                        <span class="text-danger">{{ $message }}</span>
                      @enderror


                    </div>
                    <div class="form-group">
                         <label>Mot de passe</label>
                         <input type="text" class="form-control" disabled placeholder="Password">
                    </div>
                    <div class="card-footer">
                         <button type="" class="btn btn-primary">Enregister</button>
                         <button type="button" wire:click="goToListUser()" class="btn btn-danger">retourner à la liste utiisateur</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
@livewireScripts



