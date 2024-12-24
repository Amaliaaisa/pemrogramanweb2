<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTABLE extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id' => [
                'type' => 'int',
                'constrsiraint' => 11,
                'auto_increment' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 150,

            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => 150,

            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 150,

            ],
            'tahun' => [
                'type' => 'VARCHAR',
                'constraint' => 5,

            ],
            'cover' => [
                'type' => 'VARCHAR',
                'constraint' => 150,

            ],
            'harga' => [
                'type' => 'VARCHAR',
                'constraint' => 61,

            ],
            
            
        ]);
        $this->forge->addkey('id', true);
        $this->forge->createTable('books');
    
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}

