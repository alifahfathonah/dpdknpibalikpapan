<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_pengurus extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idpngrs' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'namapngrs' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'jbtnpngrs' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'gbrpngrs' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_key('idpngrs', TRUE);
        $this->dbforge->create_table('pengurus');
    }

    public function down()
    {
        $this->dbforge->drop_table('pengurus');
    }

}

/* End of file create_pengurus.php */
