<?php

namespace Dashboards\Widgets\Interfaces;

use Dashboards\Widgets\Charts\Filter;

interface FilterInterface
{
    public function filter(
        string $displayField,
        string $displayOperator,
        string $displayValue,
        string $field,
        string $operator,
        string $value,
        string $group = '',
        string $condition = ''
    ): Filter;

    public function betweenFilter(
        string $displayField,
        string $displayOperator,
        array $displayValue,
        string $field,
        string $operator,
        array $value,
        string $group = '',
        string $condition = ''
    ): Filter;

    /**
     * @return array
     */
    public function get(): array;

    public function setFilter(array $filters);

    /**
     * @return string
     */
    public function getAddGroup(): string;

    /**
     * @param string $group
     * @return void
     */
    public function setAddGroup(string $group): void;

    /**
     * @return string
     */
    public function getAddCondition(): string;
}
