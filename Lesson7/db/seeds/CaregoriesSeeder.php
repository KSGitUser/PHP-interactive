<?php


use Phinx\Seed\AbstractSeed;

class CaregoriesSeeder extends AbstractSeed
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
        $data = [
            [
                'section_name' => 'Процессоры',
                'creates_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_name' => 'Материнские платы',
                'creates_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [   'section_name' => 'Видеокарты',
                'creates_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]           
        ];
        $this->table('categories')->insert($data)->save();
    }
}
