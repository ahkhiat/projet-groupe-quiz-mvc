<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once './App/Model.php';

require_once './Models/Theme.php';

class TestableModel extends Model
{
    public function setPDO(PDO $pdo)
    {
        $this->bd = $pdo;
    }
}

final class ThemeTest extends TestCase
{
    // public function testGetAllThemes()
    // {
    //     $theme = Theme::get_model();

    //     $result = $theme->get_all_themes();

    //     $this->assertIsArray($result);

    // }

    public function testGetAllThemes()
    {
        $pdoStatementMock = $this->createMock(PDOStatement::class);
        $pdoStatementMock->method('execute')->willReturn(true);
        $pdoStatementMock->method('fetchAll')->willReturn([]);

        $pdoMock = $this->createMock(PDO::class);
        $pdoMock->method('prepare')->willReturn($pdoStatementMock);

        $model = Theme::get_model($pdoMock);

        $result = $model->get_all_themes();

        $this->assertIsArray($result);

    }
}
