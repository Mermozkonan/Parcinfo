<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $isBtnAddClicked = false;
    public $newUser = [];
    protected $rules = [
        'newUser.nom' => 'required',
        'newUser.prenom' => 'required',
        'newUser.telephone' => 'required|numeric|unique:users,telephone',
        'newUser.email' => 'required|email|unique:users,email',

    ];

    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "users" => User::latest()->paginate(10)
        ])->extends('home')
            ->section('contentuser1');
    }
    public function goToAddUser()
    {
        $this->isBtnAddClicked = true;
    }
    public function goToListUser()
    {
        $this->isBtnAddClicked = false;
    }
    public function addUser()

    {

        $validationAttributes = $this->validate();
        $validationAttributes["newUser"]["password"] = "password";
        User::create($validationAttributes["newUser"]);
        $this->newUser = [];


        $this->dispatchBrowserEvent("swal:modal",["message"=>"utilisateur créé avec success."]);
    }

    public function confirmDelete($name)
    {
        $this->dispatchBrowserEvent("confirMessage",["message"=>"voulez vous suprimer $name"]);

    }

}
