<?php

declare(strict_types=1);

namespace Clouding\Presto\Connection;

class Connection
{
    use QueryTrait;

    /**
     * Default user.
     *
     * @var string
     */
    const DEFAULT_USER = 'presto';

    /**
     * Default host.
     *
     * @var string
     */
    const DEFAULT_HOST = 'localhost:8080';

    /**
     * Default catalog.
     *
     * @var string
     */
    const DEFAULT_CATALOG = 'default';

    /**
     * Default source.
     *
     * @var string
     */
    const DEFAULT_SOURCE = 'php';

    /**
     * The user of connection.
     *
     * @var string
     */
    protected $user;

    /**
     * The host of connection.
     *
     * @var string
     */
    protected $host;

    /**
     * The schema of connection.
     *
     * @var string
     */
    protected $schema;

    /**
     * The catalog of connection.
     *
     * @var string
     */
    protected $catalog;

    /**
     * The source of connection.
     *
     * @var string
     */
    protected $source;

    /**
     * Create a new connection instance.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->setupConfig($config);
    }

    /**
     * Setup config.
     *
     * @param array $config
     */
    protected function setupConfig(array $config)
    {
        $this->user = $config['user'] ?? static::DEFAULT_USER;
        $this->host = $config['host'] ?? static::DEFAULT_HOST;
        $this->schema = $config['schema'] ?? '';
        $this->catalog = $config['catalog'] ?? static::DEFAULT_CATALOG;
        $this->source = $config['source'] ?? static::DEFAULT_SOURCE;
    }

    /**
     * Get connection user.
     *
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * Get connection host.
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Get connection schema.
     *
     * @return string
     */
    public function getSchema(): string
    {
        return $this->schema;
    }

    /**
     * Get connection catalog.
     *
     * @return string
     */
    public function getCatalog(): string
    {
        return $this->catalog;
    }

    /**
     * Get connection source.
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
}
