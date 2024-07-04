<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'Avatar' => [parent::class, 'Avatar', null],
        "\0".parent::class."\0".'AvatarFile' => [parent::class, 'AvatarFile', null],
        "\0".parent::class."\0".'UpdatedAt' => [parent::class, 'UpdatedAt', null],
        "\0".parent::class."\0".'city' => [parent::class, 'city', null],
        "\0".parent::class."\0".'comments' => [parent::class, 'comments', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'firstname' => [parent::class, 'firstname', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'lastname' => [parent::class, 'lastname', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'posts' => [parent::class, 'posts', null],
        "\0".parent::class."\0".'roleadmin' => [parent::class, 'roleadmin', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        'Avatar' => [parent::class, 'Avatar', null],
        'AvatarFile' => [parent::class, 'AvatarFile', null],
        'UpdatedAt' => [parent::class, 'UpdatedAt', null],
        'city' => [parent::class, 'city', null],
        'comments' => [parent::class, 'comments', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'description' => [parent::class, 'description', null],
        'email' => [parent::class, 'email', null],
        'firstname' => [parent::class, 'firstname', null],
        'id' => [parent::class, 'id', null],
        'lastname' => [parent::class, 'lastname', null],
        'password' => [parent::class, 'password', null],
        'posts' => [parent::class, 'posts', null],
        'roleadmin' => [parent::class, 'roleadmin', null],
        'roles' => [parent::class, 'roles', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
