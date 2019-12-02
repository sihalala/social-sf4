<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'fullName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'postsLiked', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'posts', '' . "\0" . 'App\\Entity\\User' . "\0" . 'followers', '' . "\0" . 'App\\Entity\\User' . "\0" . 'following', '' . "\0" . 'App\\Entity\\User' . "\0" . 'confirmationToken', '' . "\0" . 'App\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'App\\Entity\\User' . "\0" . 'preferences'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'fullName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'postsLiked', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'posts', '' . "\0" . 'App\\Entity\\User' . "\0" . 'followers', '' . "\0" . 'App\\Entity\\User' . "\0" . 'following', '' . "\0" . 'App\\Entity\\User' . "\0" . 'confirmationToken', '' . "\0" . 'App\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'App\\Entity\\User' . "\0" . 'preferences'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFullName($fullName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFullName', [$fullName]);

        parent::setFullName($fullName);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($plainPassword): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$plainPassword]);

        parent::setPlainPassword($plainPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosts', []);

        return parent::getPosts();
    }

    /**
     * {@inheritDoc}
     */
    public function getFollowers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFollowers', []);

        return parent::getFollowers();
    }

    /**
     * {@inheritDoc}
     */
    public function getFollowing()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFollowing', []);

        return parent::getFollowing();
    }

    /**
     * {@inheritDoc}
     */
    public function follow(\App\Entity\User $userToFollow)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'follow', [$userToFollow]);

        return parent::follow($userToFollow);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostsLiked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostsLiked', []);

        return parent::getPostsLiked();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$confirmationToken]);

        parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreferences', []);

        return parent::getPreferences();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreferences($preferences): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreferences', [$preferences]);

        parent::setPreferences($preferences);
    }

}
