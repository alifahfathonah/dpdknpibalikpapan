<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_kata extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idkata' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'namakata' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'jbtnkata' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'gbrkata' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'isikata' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('idkata', TRUE);
        $this->dbforge->create_table('kata');
    }

    public function down()
    {
        $this->dbforge->drop_table('kata');
    }

}

/* End of file create_kata.php */
