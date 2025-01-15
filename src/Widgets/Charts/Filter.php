<?php

declare(strict_types=1);

namespace Dashboards\Widgets\Charts;

use Dashboards\Widgets\Interfaces\FilterInterface;

class Filter implements FilterInterface
{
    private const TYPES = [
        0 => 'addFilter',
        1 => 'addBetweenFilter',
    ];
    /**
     * @var array
     */
    private $filter = [];
    /**
     * @var string
     */
    private $addDisplayValue = '';
    /**
     * @var array
     */
    private $addBetweenDisplayValue = [];
    /**
     * @var string
     */
    private $addDisplayField = '';
    /**
     * @var string
     */
    private $addDisplayOperator = '';
    /**
     * @var string
     */
    private $addField = '';
    /**
     * @var string
     */
    private $addValue = '';
    /**
     * @var array
     */
    private $addBetweenValue = [];
    /**
     * @var string
     */
    private $addOperator = '';
    /**
     * @var string
     */
    private $type = '';
    /**
     * @var string
     */
    private $group = '';
    /**
     * @var string
     */
    private $condition = '';

    /**
     * @param string $displayField
     * @param string $displayOperator
     * @param string $displayValue
     * @param string $field
     * @param string $operator
     * @param string $value
     * @param string $group
     * @param string $condition
     * @return $this
     */
    public function filter(
        string $displayField,
        string $displayOperator,
        string $displayValue,
        string $field,
        string $operator,
        string $value,
        string $group = '',
        string $condition = ''
    ): FilterInterface {
        $this->setAddDisplayField($displayField);
        $this->setAddDisplayOperator($displayOperator);
        $this->setAddDisplayValue($displayValue);
        $this->setAddField($field);
        $this->setAddOperator($operator);
        $this->setAddValue($value);

        $filter = [
            'display_campo' => $this->getAddDisplayField(),
            'display_valor' => $this->getAddDisplayValue(),
            'display_operador' => $this->getAddDisplayOperator(),
            'campo' => $this->getAddField(),
            'operador' => $this->getAddOperator(),
            'valor' => $this->getAddValue(),
        ];

        if ($group !== '') {
            $this->setAddGroup($group);
            $filter['G'] = $this->getAddGroup();
        }

        if ($condition !== '') {
            $this->setAddCondition($condition);
            $filter['C'] = $this->getAddCondition();
        }
        $this->setFilter($filter);
        return $this;
    }

    public function betweenFilter(
        string $displayField,
        string $displayOperator,
        array $displayValue,
        string $field,
        string $operator,
        array $value,
        string $group = '',
        string $condition = ''
    ): Filter {
        $this->setAddDisplayField($displayField);
        $this->setAddDisplayOperator($displayOperator);
        $this->setAddBetweenDisplayValue($displayValue);
        $this->setAddField($field);
        $this->setAddOperator($operator);
        $this->setAddBetweenValue($value);
        $filter = [
            'display_campo' => $this->getAddDisplayField(),
            'display_valor' => $this->getAddBetweenDisplayValue()[0],
            'display_valor2' => $this->getAddBetweenDisplayValue()[1],
            'display_operador' => $this->getAddDisplayOperator(),
            'campo' => $this->getAddField(),
            'operador' => $this->getAddOperator(),
            'valor' => $this->getAddBetweenValue()[0],
            'valor2' => $this->getAddBetweenValue()[1],
        ];

        if ($group !== '') {
            $this->setAddGroup($group);
            $filter['G'] = $this->getAddGroup();
        }

        if ($condition !== '') {
            $this->setAddCondition($condition);
            $filter['C'] = $this->getAddCondition();
        }

        $this->setFilter($filter);

        return $this;
    }

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->filter;
    }

    public function setFilter(array $filters)
    {
        $this->filter[] = $filters;
    }

    /**
     * @return string
     */
    public function getAddGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return void
     */
    public function setAddGroup(string $group): void
    {
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getAddCondition(): string
    {
        return $this->condition;
    }

    /**
     * @return string
     */
    private function getAddDisplayValue(): string
    {
        return $this->addDisplayValue;
    }

    /**
     * @param string $addDisplayValue
     */
    private function setAddDisplayValue(string $addDisplayValue): void
    {
        $this->addDisplayValue = $addDisplayValue;
    }

    /**
     * @return string
     */
    private function getAddDisplayField(): string
    {
        return $this->addDisplayField;
    }

    /**
     * @param string $addDisplayField
     */
    private function setAddDisplayField(string $addDisplayField): void
    {
        $this->addDisplayField = $addDisplayField;
    }

    /**
     * @return string
     */
    private function getAddDisplayOperator(): string
    {
        return $this->addDisplayOperator;
    }

    /**
     * @param string $addDisplayOperator
     */
    private function setAddDisplayOperator(string $addDisplayOperator): void
    {
        $this->addDisplayOperator = $addDisplayOperator;
    }

    /**
     * @return string
     */
    private function getAddField(): string
    {
        return $this->addField;
    }

    /**
     * @param string $addField
     */
    private function setAddField(string $addField): void
    {
        $this->addField = $addField;
    }

    /**
     * @return string
     */
    private function getAddValue(): string
    {
        return $this->addValue;
    }

    /**
     * @param string $addValue
     */
    private function setAddValue(string $addValue): void
    {
        $this->addValue = $addValue;
    }

    /**
     * @return string
     */
    private function getAddOperator(): string
    {
        return $this->addOperator;
    }

    /**
     * @param string $addOperator
     */
    private function setAddOperator(string $addOperator): void
    {
        $this->addOperator = $addOperator;
    }

    /**
     * @return array
     */
    private function getAddBetweenValue(): array
    {
        return $this->addBetweenValue;
    }

    /**
     * @param array $addBetweenValue
     */
    private function setAddBetweenValue(array $addBetweenValue): void
    {
        $this->addBetweenValue = $addBetweenValue;
    }

    /**
     * @return array
     */
    private function getAddBetweenDisplayValue(): array
    {
        return $this->addBetweenDisplayValue;
    }

    /**
     * @param array $addBetweenDisplayValue
     */
    private function setAddBetweenDisplayValue(array $addBetweenDisplayValue): void
    {
        $this->addBetweenDisplayValue = $addBetweenDisplayValue;
    }

    /**
     * @param string $condition
     * @return void
     */
    private function setAddCondition(string $condition): void
    {
        $this->condition = $condition;
    }
}
