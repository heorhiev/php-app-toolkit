<?php

namespace app\toolkit\components\migrations;


interface MigrationInterface
{
    public function up(): bool;
    public function down(): bool;
}