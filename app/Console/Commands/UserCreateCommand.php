<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use function Laravel\Prompts\info;
use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

class UserCreateCommand extends Command
{
    protected $signature = 'user:create';

    protected $description = 'Create a new user';

    public function handle(): void
    {
        info('Création d\'un utilisateur');

        $name = text(
            label: 'Nom',
            required: true,
        );
        $email = text(
            label: 'Email',
            required: true,
            validate: ['email' => 'required|email|unique:users,email'],
            hint: 'Veuillez entrer une adresse email valide',
        );

        $password = password(
            label: 'Mot de passe',
            required: true,
            validate: ['password' => 'required|min:8'],
            hint: 'Le mot de passe doit contenir au moins 8 caractères',
        );

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        info('Utilisateur créé');
    }
}
