<?php
/**
 * description
 * author: longhui.huang <1592328848@qq.com>
 * datetime: 2024/5/7 18:56
 */
declare(strict_types=1);

namespace EasySwoole\ThinkORM\Db;

class Expression
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string)$this->value;
    }
}
