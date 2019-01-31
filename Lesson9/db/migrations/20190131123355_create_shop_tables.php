<?php

use Phinx\Migration\AbstractMigration;

class CreateShopTables extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('catalogs', ['comment' => 'Разделы интернет магазина']);
        $table->addColumn('name', 'string', ['comment' => 'Название раздела'])
            ->create();

        $table = $this->table('products', ['comment' => 'Товарные позиции']);
        $table->addColumn('name', 'string', ['comment' => 'Название'])
            ->addColumn('description', 'text', ['comment' => 'Описание'])
            ->addColumn(
                'price',
                'decimal',
                ['precision' => 7, 'scale' => 2, 'comment' => 'Цена']
            )
            ->addColumn('catalog_id', 'integer', ['signed' => false])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();

        $table = $this->table('users', ['comment' => 'Покупатели']);
        $table->addColumn('name', 'string', ['comment' => 'Имя покупателя'])
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();

        $table = $this->table('orders', ['comment' => 'Заказы']);
        $table->addColumn('user_id', 'integer', ['signed' => false])
                ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->create();
        $table = $this->table(
            'orders_products', ['comment' => 'Состав заказа']);
        $table->addColumn('order_id', 'integer', ['signed' => false])
              ->addColumn('product_id', 'integer', ['signed' => false])
              ->addColumn(
                  'total',
                  'integer',
                  ['signed' => false, 'default' => 1, 'comment' => 'Количество товарных позиций']
              )
              ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
                ->create(); 


    }
}
