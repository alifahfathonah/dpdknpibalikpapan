<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_kontak extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'idkntk' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'namakntk' => array(
                'type' => 'VARCHAR',
                'null' => TRUE,
                'constraint' => '255',
            ),
            'emailkntk' => array(
                'type' => 'VARCHAR',
                'null' => TRUE,
                'unique' => TRUE,
                'constraint' => '255',
            ),
            'pesankntk' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'balaskntk' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('idkntk', TRUE);
        $this->dbforge->create_table('kontak');
    }

    public function down() {
        $this->dbforge->drop_table('kontak');
    }

}

/* End of file create_kontak.php */
