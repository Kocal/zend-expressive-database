Zend-Expressive Database
========================

> A Zend-Expressive subcomponent for easily unifying database ORM usage.

## Current implementations

- [Doctrine](https://github.com/Kocal/zend-expressive-doctrinedatabase)

## Usage

### `DatabaseFactoryInterface`

This interface should be implemented by a class that will be invoked by Zend Expressive to initialize the ORM.

Example for Doctrine:
```php
<?php

use Doctrine\ORM\EntityManager;
use Kocal\Expressive\Database\DatabaseFactoryInterface;
use Psr\Container\ContainerInterface;

class EntityManagerFactory implements DatabaseFactoryInterface {
    public function __invoke(ContainerInterface $container) {
        $config = $container->get('config');
        // ...
        return EntityManager::create($foo, $bar);
    }
}
```

### `DatabaseRepositoryInterface`

This interface should be implemented by a repository.

Example:

```php
<?php

use \Kocal\Expressive\Database\DatabaseRepository;

class PostRepository implements DatabaseRepository {
    /**
     * Finds all Entities in the repository.
     * @return mixed
     */
    public function all() {
        
    }

    /**
     * Finds the first Entity in the repository.
     * @return mixed
     */
    public function first() {
        
    }

    /**
     * Finds the last Entity in the repository.
     * @return mixed
     */
    public function last() {
    
    }

    /**
     * Finds an Entity by its ID.
     * @param mixed $id
     * @return mixed
     */
    public function find($id) {
        
    }

    /**
     * Finds all Entities where `$field` value is equal `$value`.
     * @param string $field
     * @param mixed $value
     * @param array|null $orderBy
     * @return mixed
     */
    public function findByField($field, $value, $orderBy = null) {
    
    }

    /**
     * Finds all Entities depending on `$criteria`.
     * @param array $criteria
     * @param array|null $orderBy
     * @param int|null $limit
     * @param int|null $offset
     * @return mixed
     */
    public function findWhere(array $criteria, $orderBy = null, $limit = null, $offset = null) {   
        
    }

    /**
     * Finds Entities where `$column` is in `$where` array.
     * @param string $column
     * @param array $where
     * @return mixed
     */
    public function findWhereIn($column, array $where) {
    
    }

    /**
     * Finds Entities where `$column` is not in `$where` array.
     * @param string $column
     * @param array $where
     * @return mixed
     */
    public function findWhereNotIn($column, array $where) {
        
    }

    /**
     * Save an Entity.
     * @param object $entity
     * @return void
     */
    public function save($entity) {
    
    }

    /**
     * Delete an Entity by its ID or by itself.
     * @param int|object $idOrEntity
     * @return void
     */
    public function delete($idOrEntity) {
           
    }    
}

```