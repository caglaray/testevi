<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);
        $this->call(CorporationsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DoctorDegreeSeeder::class);
        $this->call(PointSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(VideoTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(QuestionAnswerSeeder::class);
        $this->call(DocToCatSeeder::class);
        $this->call(DocToServiceSeeder::class);






    }
}
