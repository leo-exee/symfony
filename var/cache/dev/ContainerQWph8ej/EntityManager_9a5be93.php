<?php

namespace ContainerQWph8ej;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6eb0d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd71f0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties85161 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getConnection', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getMetadataFactory', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getExpressionBuilder', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'beginTransaction', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getCache', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'transactional', array('func' => $func), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'commit', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->commit();
    }

    public function rollback()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'rollback', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getClassMetadata', array('className' => $className), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'createQuery', array('dql' => $dql), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'createNamedQuery', array('name' => $name), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'createQueryBuilder', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'flush', array('entity' => $entity), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'clear', array('entityName' => $entityName), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->clear($entityName);
    }

    public function close()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'close', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->close();
    }

    public function persist($entity)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'persist', array('entity' => $entity), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'remove', array('entity' => $entity), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'refresh', array('entity' => $entity), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'detach', array('entity' => $entity), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'merge', array('entity' => $entity), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'contains', array('entity' => $entity), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getEventManager', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getConfiguration', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'isOpen', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getUnitOfWork', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getProxyFactory', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'initializeObject', array('obj' => $obj), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'getFilters', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'isFiltersStateClean', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'hasFilters', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return $this->valueHolder6eb0d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd71f0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6eb0d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6eb0d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6eb0d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, '__get', ['name' => $name], $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        if (isset(self::$publicProperties85161[$name])) {
            return $this->valueHolder6eb0d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6eb0d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6eb0d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6eb0d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6eb0d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, '__isset', array('name' => $name), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6eb0d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6eb0d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, '__unset', array('name' => $name), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6eb0d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6eb0d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, '__clone', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        $this->valueHolder6eb0d = clone $this->valueHolder6eb0d;
    }

    public function __sleep()
    {
        $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, '__sleep', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;

        return array('valueHolder6eb0d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd71f0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd71f0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd71f0 && ($this->initializerd71f0->__invoke($valueHolder6eb0d, $this, 'initializeProxy', array(), $this->initializerd71f0) || 1) && $this->valueHolder6eb0d = $valueHolder6eb0d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6eb0d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6eb0d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
