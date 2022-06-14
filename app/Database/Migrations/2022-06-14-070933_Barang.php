<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
            'type'=>'INT',
            'constraint'=>11,
            'unsigned'=>TRUE,
            'auto_increment'=>TRUE,
            ],
            'nama'=>[
                'type'=>'TEXT',
            ],
            'harga'=>[
                'type'=>'INT',
                'constraint'=>11,
                'null'=>TRUE,
            ],
            'stok'=>[
                'type'=>'INT',
                'constraint'=>11,   
                'null'=>TRUE,
            ],
            'gambar'=>[
                'type'=>'VARCHAR',
                'constraint'=>'100',
                'null'=>TRUE,
            ],
            'created_by'=>[
                'type'=>'INT',
                'constraint'=>11,
            ], 
            'created_date'=>[
                'type'=>'DATETIME',
            ],
            'update_by'=>[
                'type'=>'INT',
                'constraint'=>11,
                'null'=>TRUE,
            ],
            'update_date'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
