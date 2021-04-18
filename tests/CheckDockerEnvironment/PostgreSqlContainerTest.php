<?php
declare(strict_types=1);

namespace Tests\CheckDockerEnvironment;

use PDO;
use PHPUnit\Framework\TestCase;

class PostgreSqlContainerTest extends TestCase
{
    public function test_connect_to_postgresql_with_pdo()
    {
        $db_name = 'db_name';
        $db_user = 'db_user';
        $db_password = 'db_password';
        $pdo = new PDO(
            "pgsql:host=db;dbname=$db_name;",
            $db_user,
            $db_password
        );
        $this->assertInstanceOf(PDO::class, $pdo);
    }

}
