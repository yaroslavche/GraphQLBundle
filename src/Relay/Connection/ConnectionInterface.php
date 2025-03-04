<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Relay\Connection;

use GraphQL\Executor\Promise\Promise;

/**
 * @phpstan-template T
 */
interface ConnectionInterface
{
    /**
     * Get the connection edges.
     *
     * @return iterable<EdgeInterface<T>>
     */
    public function getEdges();

    /**
     * Set the connection edges.
     *
     * @param iterable<EdgeInterface<T>> $edges
     */
    public function setEdges(iterable $edges): void;

    /**
     * Get the page info.
     *
     * @return PageInfoInterface
     */
    public function getPageInfo(): ?PageInfoInterface;

    /**
     * Set the page info.
     */
    public function setPageInfo(PageInfoInterface $pageInfo): void;

    /**
     * Get the total count or promise that returns the total count.
     *
     * @return int|Promise|null
     */
    public function getTotalCount();

    /**
     * Set the total count or promise that returns the total count.
     *
     * @param int|Promise $totalCount
     */
    public function setTotalCount($totalCount): void;
}
