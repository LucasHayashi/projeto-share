<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id_tipo' => 1,
                'name' => 'Usuário Teste',
                'email' => 'teste@example.com',
                'cep' => '17032-520',
                'rua' => 'Vicente Pelegrini Savastano, 336',
                'bairro' => 'Jardim Carolina',
                'cidade' => 'Bauru',
                'uf' => 'SP',
                'celular' => '(14)99680-5134',
            ],
            [
                'id_tipo' => 2,
                'name' => 'Projeto Share',
                'email' => 'projeto@example.com',
                'cep' => '17033-260',
                'rua' => 'Av. Nações Unidas, 58-50',
                'bairro' => 'Núcleo Res. Pres. Geisel',
                'cidade' => 'Bauru',
                'uf' => 'SP',
                'celular' => '(14)98800-3272',
            ],
            [
                'id_tipo' => 2,
                'name' => 'Projeto Tokyo',
                'email' => 'projetotokyo@example.com',
                'cep' => null,
                'rua' => '2 Chome−24−12 14',
                'bairro' => 'Shibuya',
                'cidade' => 'Tokyo',
                'uf' => null,
                'celular' => '(14)98800-3272',
            ],
            [
                'id_tipo' => 2,
                'name' => 'Projeto GT',
                'email' => 'projetogt@example.com',
                'cep' => '88338-900',
                'rua' => 'Av. Getúlio Vargas, 6-15',
                'bairro' => 'Av. Getúlio Vargas, 6-15',
                'cidade' => 'Bauru',
                'uf' => 'SP',
                'celular' => '(14)98800-3272',
            ],
            [
                'id_tipo' => 2,
                'name' => 'Projeto SC',
                'email' => 'projetosc@example.com',
                'cep' => '17017-000',
                'rua' => 'Rua Dinamarca, 320',
                'bairro' => 'Shibuya',
                'cidade' => 'Balneário Camboriú',
                'uf' => 'SC',
                'celular' => '(14)98800-3272',
            ],
            [
                'id_tipo' => 3,
                'name' => 'Administrador',
                'email' => 'admin@example.com',
                'cep' => '17032-520',
                'rua' => 'Vicente Pelegrini Savastano, 336',
                'bairro' => 'Jardim Carolina',
                'cidade' => 'Bauru',
                'uf' => 'SP',
                'celular' => '(14)99680-5134',
            ],
        ];

        foreach ($users as $user) {
            User::create(array_merge($user, [
                'password' => Hash::make('12345678'),
                'ativo' => 1,
                'profile_icon' => rand(1, 59),
                'auth_type' => 'email',
            ]));
        }
    }
}
