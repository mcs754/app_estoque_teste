<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('MACARRÃO', 25, 200.00, '2020-12-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('AÇÚCAR', 75, 55.00, '2021-08-24'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('ARROZ', 45, 3.55, '2019-10-01'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_vencimento) values (?,?,?,?)', array('GELATINA', 500, 2.44, '2019-10-12'));
    }
}
