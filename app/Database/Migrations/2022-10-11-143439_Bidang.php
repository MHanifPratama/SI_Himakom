<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bidang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bidang' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_bidang' => [
                'type'       => 'VARCHAR',
                'constraint' => 1000,
            ],
            'visi' => [
                'type' => 'VARCHAR',
                'constraint' => 1000,
            ],
            'misi' => [
                'type'     => 'VARCHAR',
                'constraint' => 1000,
            ],
            'logo_bidang' => [
                'type'     => 'VARCHAR',
                'constraint' => 1000,
            ],
        ]);
        $this->forge->addKey('id_bidang', true);
        
        $this->forge->createTable('bidang');
    }

    public function down()
    {
        $this->forge->dropTable('bidang');
    }
}
