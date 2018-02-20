<?php
declare(strict_types = 1);

namespace TBolier\RethinkQL\Query\Aggregation;

use TBolier\RethinkQL\Query\QueryInterface;
use TBolier\RethinkQL\Response\ResponseInterface;

interface AggregationInterface
{
    /**
     * @return QueryInterface
     */
    public function isEmpty(): QueryInterface;

    /**
     * @param int $n
     * @return AggregationInterface
     */
    public function limit($n): AggregationInterface;

    /**
     * @param int $n
     * @return AggregationInterface
     */
    public function skip($n): AggregationInterface;

    /**
     * @param mixed|QueryInterface $key
     * @return AggregationInterface
     */
    public function orderBy($key): AggregationInterface;

    /**
     * @return Iterable|ResponseInterface
     */
    public function run();
}