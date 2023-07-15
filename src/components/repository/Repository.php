<?php

namespace app\toolkit\components\repository;

use app\toolkit\components\Entity;
use app\toolkit\components\repository\interfaces\RepositoryInterface;
use app\toolkit\components\repository\traits\{FindTrait, SavedTrait, TypesTrait};


abstract class Repository implements RepositoryInterface
{
    use FindTrait, SavedTrait, TypesTrait;


    protected $_entityClassName;


    abstract public static function tableName(): string;


    public function __construct($entityClassName)
    {
        $this->_entityClassName = $entityClassName;
    }


    /**
     * @return Entity
     */
    public function entityClassName(): string
    {
        return $this->_entityClassName;
    }
}