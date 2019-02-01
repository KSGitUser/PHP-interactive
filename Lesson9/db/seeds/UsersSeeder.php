<?php


use Phinx\Seed\AbstractSeed;

class UsersSeeder extends AbstractSeed
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
        $query = 'TRUNCATE users';
        $results = $this->adapter->query($query);

        $data = [
            [
                'name' => 'Иван Иванов',
                'email' => 'ivan@mail.ru',
                'password' => password_hash('qwert', PASSWORD_DEFAULT)
            ],
        ];
        $this->table('users')->insert($data)->save();

    }
}
