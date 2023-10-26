<?php

namespace Database\Seeders;
use App\Models\Course;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create(['name'=>'Administração','description'=>'Bacharelado em Administração de Empresas']);

        Course::create(['name'=>'Arquitetura e Urbanismo', 'description'=>'Bacharelado em Arquitetura e Urbanismo']);

        Course::create(['name'=>'Biologia','description'=>'Bacharelado em Ciências Biológicas']);

        Course::create(['name'=>'Ciência da Computação','description'=>'Bacharelado em Ciência da Computação']);

        Course::create(['name'=>'Ciências Contábeis','description'=>'Bacharelado em Ciências Contábeis']);

        Course::create(['name'=>'Design','description'=>'Bacharelado em Design']);

        Course::create(['name'=>'Direito','description'=>'Bacharelado em Direito']);

        Course::create(['name'=>'Educação Física','description'=>'Bacharelado em Educação Física']);

        Course::create(['name'=>'Enfermagem','description'=>'Bacharelado em Enfermagem']);

        Course::create(['name'=>'Engenharia Civil','description'=>'Bacharelado em Engenharia Civil']);

        Course::create(['name'=>'Engenharia de Produção','description'=>'Bacharelado em Engenharia de Produção']);

        Course::create(['name'=>'Engenharia Elétrica','description'=>'Bacharelado em Engenharia Elétrica']);

        Course::create(['name'=>'Farmácia','description'=>'Bacharelado em Farmácia']);
        
        Course::create(['name'=>'Física','description'=>'Bacharelado em Física']);

        Course::create(['name'=>'Fisioterapia','description'=>'Bacharelado em Fisioterapia']);

        Course::create(['name'=>'Fonoaudiologia','description'=>'Bacharelado em Fonoaudiologia']);

        Course::create(['name'=>'História','description'=>'Licenciatura em História']);

        Course::create(['name'=>'Letras','description'=>'Licenciatura em Letras']);

        Course::create(['name'=>'Matemática','description'=>'Licenciatura em Matemática']);

        Course::create(['name'=>'Medicina','description'=>'Medicina']);

        Course::create(['name'=>'Medicina Veterinária','description'=>'Medicina Veterinária']);

        Course::create(['name'=>'Nutrição','description'=>'Bacharelado em Nutrição']);

        Course::create(['name'=>'Pedagogia','description'=>'Licenciatura em Pedagogia']);

        Course::create(['name'=>'Publicidade e Propaganda','description'=>'Bacharelado em Publicidade e Propaganda']);

        Course::create(['name'=>'Química','description'=>'Bacharelado em Química']);

        Course::create(['name'=>'Relações Internacionais','description'=>'Bacharelado em Relações Internacionais']);

        Course::create(['name'=>'Sistemas de Informação','description'=>'Bacharelado em Sistemas de Informação']);

        Course::create(['name'=>'Turismo','description'=>'Bacharelado em Turismo']);

        Course::create(['name'=>'Zootecnia','description'=>'Bacharelado em Zootecnia']);

        Course::create(['name'=>'Análise e Desenvolvimento de Sistemas','description'=>'Bacharelado em Análise e Desenvolvimento de Sistemas']);

        Course::create(['name'=>'Artes Cênicas','description'=>'Bacharelado em Artes Cênicas']);

        Course::create(['name'=>'Astronomia','description'=>'Bacharelado em Astronomia']);

        Course::create(['name'=>'Biotecnologia','description'=>'Bacharelado em Biotecnologia']);

        Course::create(['name'=>'Dança','description'=>'Bacharelado em Dança']);

        Course::create(['name'=>'Datascience','description'=>'Bacharelado em Datascience']);

        Course::create(['name'=>'Design de Games','description'=>'Bacharelado em Design de Games']);

        Course::create(['name'=>'Direito Digital','description'=>'Bacharelado em Direito Digital']);

        Course::create(['name'=>'Economia Criativa','description'=>'Bacharelado em Economia Criativa']);

        Course::create(['name'=>'Economia Solidária','description'=>'Bacharelado em Economia Solidária']);

        Course::create(['name'=>'Educação Ambiental','description'=>'Licenciatura em Educação Ambiental']);

        Course::create(['name'=>'Estética e Cosmética','description'=>'Bacharelado em Estética e Cosmética']);

        Course::create(['name'=>'Filosofia','description'=>'Bacharelado em Filosofia']);

        Course::create(['name'=>'Geografia','description'=>'Licenciatura em Geografia']);

        Course::create(['name'=>'Jornalismo','description'=>'Bacharelado em Jornalismo']);

        Course::create(['name'=>'Lingüística','description'=>'Bacharelado em Lingüística']);

        Course::create(['name'=>'Marketing Digital','description'=>'Bacharelado em Marketing Digital']);

        Course::create(['name'=>'Meio Ambiente','description'=>'Bacharelado em Meio Ambiente']);

        Course::create(['name'=>'Musicoterapia','description'=>'Bacharelado em Musicoterapia']);

        Course::create(['name'=>'Neurolinguística','description'=>'Bacharelado em Neurolinguística']);

        Course::create(['name'=>'Psicologia','description'=>'Bacharelado em Psicologia']);

        Course::create(['name'=>'Saúde Coletiva','description'=>'Bacharelado em Saúde Coletiva']);

        Course::create(['name'=>'Serviço Social','description'=>'Bacharelado em Serviço Social']);

        Course::create(['name'=>'Teologia','description'=>'Bacharelado em Teologia']);
    }
}
