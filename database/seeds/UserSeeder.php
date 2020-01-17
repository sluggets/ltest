<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        $data = [];

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'username' => $faker->userName,
                'password' => sha1($faker->password),
                'email' => $faker->email,
                'phone' => $faker->phoneNumber, 
                'name' => $faker->name('female'),
            ];        
        }

        $this->table('users')->insert($data)->saveData();

    }
}
