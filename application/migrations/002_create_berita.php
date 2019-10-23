<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_berita extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idbrt' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'namabrt' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'slugbrt' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'gbrbrt' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'isibrt' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'hitbrt' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE
            ),
        ));
        $this->dbforge->add_key('idbrt', TRUE);
        $this->dbforge->create_table('berita');
    }

    public function down()
    {
        $this->dbforge->drop_table('berita');
    }

}

/* End of file create_berita.php */
