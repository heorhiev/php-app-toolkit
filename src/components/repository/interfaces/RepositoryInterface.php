<?php

namespace app\toolkit\components\repository\interfaces;

use app\toolkit\components\Entity;
use app\toolkit\components\repository\Repository;


interface RepositoryInterface
{
    public function select(array $columns): Repository;
    public function findById(int $id): Repository;

    public function asArrayOne(): array;

    public function asEntityOne(): ?Entity;

    public function entityClassName(): string;

    public function getBindTypes(array $columns): array;

    public function create(array $attributes): bool;

    public function update(array $attributes, array $conditions): bool;

    public function delete(array $conditions): bool;

    public static function tableName(): string;
}