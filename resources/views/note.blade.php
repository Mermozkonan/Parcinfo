<div class="login-logo" >
    <a href="#" style="color: #b3b6b9; font-size: 1.8em; "><b style="font-weight:bold;">YBLT</b>CORPORATE V.1</a>
    <hr/>
</div>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
----2
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Tableau de bord
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-chart-line"></i>
                <p>vue globale</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-swatchbook"></i>
                <p>location</p>
            </a>
        </li>
    </ul>
</li>

Route::group([
    "middleware"=>["auth","auth.admin"],
    "as"=>"admin."
], function(){
    Route::group([
        "prefix"=>"habilitations",
        "as"=>"habilitations."
    ], function(){
        Route::get('/utilisateurs', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

    });
});
--------------------
<div class="col-md-6">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Quick Example</h3>
</div>


<form>
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<div class="form-group">
<label for="exampleInputFile">File input</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
<div class="input-group-append">
<span class="input-group-text">Upload</span>
</div>
</div>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Different Styles</h3>
</div>

<div class="card-body">
<h4>Input</h4>
<div class="form-group">
<label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label>
<input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border">
</div>
<div class="form-group">
<label for="exampleInputBorderWidth2">Bottom Border only 2px Border <code>.form-control-border.border-width-2</code></label>
<input type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder=".form-control-border.border-width-2">
</div>
<div class="form-group">
<label for="exampleInputRounded0">Flat <code>.rounded-0</code></label>
<input type="text" class="form-control rounded-0" id="exampleInputRounded0" placeholder=".rounded-0">
</div>
<h4>Custom Select</h4>
<div class="form-group">
<label for="exampleSelectBorder">Bottom Border only <code>.form-control-border</code></label>
<select class="custom-select form-control-border" id="exampleSelectBorder">
<option>Value 1</option>
<option>Value 2</option>
<option>Value 3</option>
</select>
</div>
<div class="form-group">
<label for="exampleSelectBorderWidth2">Bottom Border only <code>.form-control-border.border-width-2</code></label>
<select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
<option>Value 1</option>
<option>Value 2</option>
<option>Value 3</option>
</select>
 </div>
<div class="form-group">
<label for="exampleSelectRounded0">Flat <code>.rounded-0</code></label>
<select class="custom-select rounded-0" id="exampleSelectRounded0">
<option>Value 1</option>
<option>Value 2</option>
<option>Value 3</option>
</select>
</div>
</div>

</div>


<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Input Addon</h3>
</div>
<div class="card-body">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">@</span>
</div>
<input type="text" class="form-control" placeholder="Username">
</div>
<div class="input-group mb-3">
<input type="text" class="form-control">
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">$</span>
</div>
<input type="text" class="form-control">
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>
<h4>With icons</h4>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-envelope"></i></span>
</div>
<input type="email" class="form-control" placeholder="Email">
</div>
<div class="input-group mb-3">
<input type="text" class="form-control">
<div class="input-group-append">
<span class="input-group-text"><i class="fas fa-check"></i></span>
</div>
</div>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<i class="fas fa-dollar-sign"></i>
</span>
</div>
<input type="text" class="form-control">
<div class="input-group-append">
<div class="input-group-text"><i class="fas fa-ambulance"></i></div>
</div>
</div>
<h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>
<div class="row">
<div class="col-lg-6">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<input type="checkbox">
</span>
</div>
<input type="text" class="form-control">
</div>

</div>

<div class="col-lg-6">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><input type="radio"></span>
</div>
<input type="text" class="form-control">
</div>

</div>

</div>

<h5 class="mt-4 mb-2">With buttons</h5>
<p>Large: <code>.input-group.input-group-lg</code></p>
<div class="input-group input-group-lg mb-3">
<div class="input-group-prepend">
<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
Action
</button>
<ul class="dropdown-menu">
<li class="dropdown-item"><a href="#">Action</a></li>
<li class="dropdown-item"><a href="#">Another action</a></li>
<li class="dropdown-item"><a href="#">Something else here</a></li>
<li class="dropdown-divider"></li>
<li class="dropdown-item"><a href="#">Separated link</a></li>
</ul>
</div>

<input type="text" class="form-control">
</div>

<p>Normal</p>
<div class="input-group mb-3">
<div class="input-group-prepend">
<button type="button" class="btn btn-danger">Action</button>
</div>

<input type="text" class="form-control">
</div>

<p>Small <code>.input-group.input-group-sm</code></p>
<div class="input-group input-group-sm">
<input type="text" class="form-control">
<span class="input-group-append">
<button type="button" class="btn btn-info btn-flat">Go!</button>
</span>
</div>

</div>

</div>


<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Horizontal Form</h3>
</div>


<form class="form-horizontal">
<div class="card-body">
<div class="form-group row">
<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck2">
<label class="form-check-label" for="exampleCheck2">Remember me</label>
</div>
</div>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-info">Sign in</button>
<button type="submit" class="btn btn-default float-right">Cancel</button>
</div>

</form>
</div>

</div>
-----
<form wire:submit.prevent="addUser()">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" wire:model="newUser.nom">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" class="form-control"  wire:model="newUser.prenom">
                </div>
            </div>
        </div>


        <div class="form-group">
                <label>Sexe</label>
                <select class="form-control"  wire:model="newUser.sexe">
                    <option value="">----</option>
                    <option value="H">Homme</option>
                    <option value="F">Femme</option>
                </select>
     </div
                  <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control"  wire:model="newUser.telephone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control"  wire:model="newUser.nom">
                    </div>

            <div class="form-group">
            <label>Mot de passe</label>
            <input type="text" class="form-control" disabled placeholder="Password">
            </div>



            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Enregister</button>
            <button type="button" wire:click="goToListUser()" class="btn btn-danger">retourner à la liste utiisateur</button>
            </div>
</div>
</form>

<script>
        window.addEventListener("showSuccessMessage",event=>{
            Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        toast:true,
                        title: event.detail.message || "operation effectuée avec succès",
                        showConfirmButton: false,
                        timer: 3000
                        }
                    )
        })
    $this->dispatchBrowserEvent(event:'toastr:info',[
        'message'=>"record added successfully",
    ]);
</script>
$this->dispatchBrowserEvent("DOMContentLoaded",["message"=>"utilisateur créé avec succès"]);
---------------------------------
public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'User Created Successfully!',
                'text' => 'It will list on the user's table soon.'
            ]);
    }
    swal({
        title: event.detail.message,
        text: event.detail.text,
        icon: event.detail.type,
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.livewire.emit('remove');
        }
      });
      $this->dispatchBrowserEvent('swal:modal', [
        'type' => 'success',
        'message' => 'utilisateur créé avec succes!',
        'text' => 'Il sera bientôt répertorié sur la table de l\'utilisateur.'


    ]);
    ------------------------------------------------------------

<script>

    window.addEventListener('swal:modal', event => {
        swal({
          title: event.detail.message,
          text: event.detail.text,
          icon: event.detail.type,
        });
    });

    window.addEventListener('swal:confirm', event => {
        swal({
          title: event.detail.message,
          text: event.detail.text,
          icon: event.detail.type,
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.livewire.emit('remove');
          }
        });
    });
     </script>
  ---------------
  public function alertSuccess()
  {
      $this->dispatchBrowserEvent('swal:modal', [
              'type' => 'success',
              'message' => 'User Created Successfully!',
              'text' => 'It will list on the user's table soon.'
          ]);
  }
----------------------------
sweetAlert('Success!', 'Event was successfully saved.', 'success');
