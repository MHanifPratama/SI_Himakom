<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type'           => 'INT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
                
            ],
            'nama_admin' => [
                'type'       => 'VARCHAR',
                'constraint' => 1000,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 1000,
            ],
            'password' => [
                'type'     => 'VARCHAR',
                'constraint' => 1000,
            ],
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('akun_admin');

    }

    public function down()
    {
        $this->forge->dropTable('akun_admin');
    }
}
