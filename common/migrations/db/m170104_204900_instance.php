<?php

use yii\db\Migration;

/**
 * Class m170104_204900_instance
 *
 * @package common\migrations\db
 */
class m170104_204900_instance extends Migration
{
    /**
     * @var string
     */
    public static $tableName    = '{{%instance}}';

    /**
     * @var string
     */
    public static $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = self::$tableOptions;
        }

        $this->createTable(self::$tableName, [
            'id' => $this->primaryKey(),
            'instanceId' => $this->string(32)->notNull(),
            'image' => $this->string(32)->notNull(),
            'command' => $this->string(32),
            'created' => $this->string(32),
            'state' => $this->string(32),
            'status' => $this->string(32)->notNull(),
            'ports' => $this->string(32)->notNull(),
            'networks' => $this->string(256)
        ], $tableOptions);

        $this->createIndex('idx_instance_instanceId', self::$tableName, 'instanceId');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::$tableName);
    }
}
