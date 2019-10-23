<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_informasi extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'idinf' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'tlpinf' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'emailinf' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'fbinf' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'twitinf' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'iginf' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'almtinf' => array(
                'type' => 'TEXT',
            ),
            'mapinf' => array(
                'type' => 'TEXT',
            ),
            'susuninf' => array(
                'type' => 'TEXT',
            ),
            'sjrhinf' => array(
                'type' => 'TEXT',
            ),
        ));
        $this->dbforge->add_key('idinf', TRUE);
        $this->dbforge->create_table('informasi');
    }

    public function down()
    {
        $this->dbforge->drop_table('informasi');
    }

}

/* End of file create_informasi.php */
