<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE VIEW `view_setting` AS select `db_portofolio`.`web_config`.`id` AS `id`,`db_portofolio`.`web_config`.`group_id` AS `group_id`,`db_portofolio`.`web_config`.`name` AS `name`,`db_portofolio`.`web_config`.`value` AS `value`,`db_portofolio`.`web_config`.`default` AS `default`,`db_portofolio`.`web_config`.`active` AS `active`,`db_portofolio`.`web_config_group`.`name` AS `group_name` from (`db_portofolio`.`web_config` left join `db_portofolio`.`web_config_group` on((`db_portofolio`.`web_config`.`group_id` = `db_portofolio`.`web_config_group`.`id`)))");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS `view_setting`");
    }
};
