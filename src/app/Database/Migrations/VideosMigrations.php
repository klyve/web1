<?php namespace App\Database\Migrations;
/**
 * This is a migrator which creates the videos table and sets the fields
 * name, type, primary key or not and length if applicable.
 * We use the CLI tool phptoolbox migrate:up to create the table, the phptoolbox migrate:down
 * to destroy the table and phptoolbox migrate:refresh to run the down function first, then
 * the up function.
 *
 * PHP version 7
 *
 * @category   Migrators
 * @package    rewind
 * @version    1.0
 * @link       https://bitbucket.org/klyve/imt2291-project1-spring2018
 * @since      File available since Release 1.0
 */

use \MVC\Database\Schema;

class VideosMigrations {

/**
 * The up function creates a new table with a set of fields with its properties
 */

    public function up() {
        Schema::create('videos', function($table){
            $table->primary('id')->autoIncrement();
            $table->string('videoId');
            $table->string('name');
            $table->string('thumbnail');
            $table->string('description')->length(1500);
            $table->number('userId');
            $table->string('created_at');
            $table->string('deleted_at');
        });
    }

/**
 * The down function destroys the table
 */

    public function down() {
        Schema::destroy('videos');
    }

}
