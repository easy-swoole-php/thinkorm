<?php
/**
 * description
 * author: longhui.huang <1592328848@qq.com>
 * datetime: 2024/5/7 19:09
 */
declare(strict_types=1);

namespace EasySwoole\ThinkORM\Tests\Db;

use EasySwoole\ThinkORM\Db\Query;
use PHPUnit\Framework\TestCase;

final class QueryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function getQuery()
    {
        return new Query();
    }

    public function testFind()
    {
        $sql = $this->getQuery()->table('think_user')->where('id', 1)->fetchSql()->find();
        $this->assertSame('SELECT * FROM think_user WHERE  id = 1 LIMIT 1', $sql);
    }
}
