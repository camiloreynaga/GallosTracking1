<?php

class m150105_001644_initial_data extends CDbMigration
{
//	public function up()
//	{
//	}
//
//	public function down()
//	{
//		echo "m150104_220818_create_initial_data does not support migration down.\n";
//		return false;
//	}

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
                       
            $this->createTable('tbl_galpon', array(
                'id'=>'pk',
                'galpon'=>'varchar(50)',
                'active'=>'bool DEFAULT 0', // 0=si ;1=no
                //registro para el sistema
                'create_time'=>'datetime DEFAULT NULL',
                'create_user_id'=> 'int(11) DEFAULT NULL',
                'update_time'=>'datetime DEFAULT NULL',
                'update_user_id'=>'int(11) DEFAULT NULL',
            ), 'ENGINE=InnoDB');
            
            $this->createTable('tbl_type', array(
                'id'=>'pk',
                'type'=>'varchar(50)',
                'active'=>'bool DEFAULT 0', // 0=si ;1=no
                //registro para el sistema
                'create_time'=>'datetime DEFAULT NULL',
                'create_user_id'=> 'int(11) DEFAULT NULL',
                'update_time'=>'datetime DEFAULT NULL',
                'update_user_id'=>'int(11) DEFAULT NULL',
            ), 'ENGINE=InnoDB');
            
            //Tabla rooster - gallos
            $this->createTable('tbl_rooster',array(
                'id'=>'pk',
                'nro_file'=>'varchar(10) NOT NULL',
                'nro_plate'=>'varchar(50) NOT NULL', // und de medida
                'galpon_id'=>'int(11)',
                'name'=>'varchar(50)',
                'sex'=>'bool NOT NULL DEFAULT 0', //0=m 1=f
                'nro_camada'=>'int(11)',
                'father'=>'varchar(50)',
                'mother'=>'varchar(50)',
                'active'=>'bool DEFAULT 0', // 0=si ;1=no
                'type_id'=>'int(11)',
                'observation'=>'text',
                //
                //registro para el sistema
                'create_time'=>'datetime DEFAULT NULL',
                'create_user_id'=> 'int(11) DEFAULT NULL',
                'update_time'=>'datetime DEFAULT NULL',
                'update_user_id'=>'int(11) DEFAULT NULL',
            ),'ENGINE=InnoDB');
            
            //relaciones
             //producto tiene una presentacion 
             $this->addForeignKey('fk_rooster_galpon', 'tbl_rooster', 'galpon_id', 'tbl_galpon','id', 'CASCADE', 'RESTRICT');
             $this->addForeignKey('fk_rooster_type', 'tbl_rooster', 'type_id', 'tbl_type','id', 'CASCADE', 'RESTRICT');
	}

	public function safeDown()
	{
            $this->dropForeignKey('fk_rooster_galpon', 'tbl_rooster');
            $this->dropForeignKey('fk_rooster_type', 'tbl_rooster');
            $this->dropTable('tbl_galpon');
            $this->dropTable('tbl_type');
            $this->dropTable('tbl_rooster');
	}
	
}