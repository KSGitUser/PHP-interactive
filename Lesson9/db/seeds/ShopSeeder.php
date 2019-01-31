<?php


use Phinx\Seed\AbstractSeed;

class ShopSeeder extends AbstractSeed
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
        $query = 'TRUNCATE products'; //очистка таблицы
        $result = $this->adapter->query($query);

        $query = 'TRUNCATE catalogs';
        $result = $this->adapter->query($query);

        $data = [
            ['name' => 'Процеccоры'],
            ['name' => 'Материнские платы'],
            ['name' => 'Видеокарты']
        ];
        $this->table('catalogs')->insert($data)->save();

        $query = 'SELECT * FROM catalogs';
        $results = $this->adapter->query($query);

        $products = [];
        $faker = Faker\Factory::create();
        while($catalog = $results->fetch(PDO::FETCH_ASSOC)) {
            for($i = 0; $i < 10; $i++) {
                $products[] = [
                    'name' => $faker->bothify("{$catalog['name']} ????####"),
                    'description' => $faker->text(200),
                    'price' => $faker->randomFloat(null, 1000.0, 20000.0),
                    'catalog_id' => $catalog['id']
                ];
            }
        }

        $this->table('products')->insert($products)->save();

    }
}
