<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'nome' => 'bootstrap dashboard',
                'descrizione' => 'playstation dashboard',
                'giorni' => 2,
                'linguaggi_usati' => 'html and css',
                'repo_url' => 'https://github.com/Youss0203/html-css-bootstrap-dashboard'
            ],
            [
                'nome' => 'spotify web',
                'descrizione' => 'copia di spotify',
                'giorni' => 3,
                'linguaggi_usati' => 'html and css',
                'repo_url' => 'https://github.com/Youss0203/html-css-spotifyweb'
            ],
            [
                'nome' => 'vue boolzapp',
                'descrizione' => 'a copy of whatsapp',
                'giorni' => 3,
                'linguaggi_usati' => 'html, css and js',
                'repo_url' => 'https://github.com/Youss0203/vue-boolzapp'
            ],
            [
                'nome' => 'vite comics',
                'descrizione' => 'copia del sito dc comics',
                'giorni' => 1,
                'linguaggi_usati' => 'html, css and vuejs + vite',
                'repo_url' => 'https://github.com/Youss0203/vite-comics'
            ],
        ];

        foreach ($projects as $project) {
            $newProject = new Project();

            $newProject->nome = $project['nome'];
            $newProject->descrizione = $project['descrizione'];
            $newProject->giorni = $project['giorni'];
            $newProject->linguaggi_usati = $project['linguaggi_usati'];
            $newProject->repo_url = $project['repo_url'];
            $newProject->save();
        }
    }
}