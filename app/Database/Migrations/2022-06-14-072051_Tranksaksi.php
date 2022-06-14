<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tranksaksi extends Migration
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
            'id_barang'=>[
            'type'=>'INT',
            'constraint'=>11,
            'unsigned'=>TRUE,
            ],
            'id_pembeli'=>[
            'type'=>'INT',
            'constraint'=>11,
            'unsigned'=>TRUE,
            ],
            'jumlah'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'total_harga'=>[
                'type'=>'INT',
                'constraint'=>11,   
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
        $this->forge->addforeignKey('id_pembeli','user','id');
        $this->forge->addforeignKey('id_barang','barang','id');
        $this->forge->createTable('tranksaksi');
    }

    public function down()
    {
        $this->forge->dropTable('tranksaksi');
    }
}
