<?php

declare(strict_types=1);

namespace Tests\Creational\Prototype\Report;

use DesignPatterns\Creational\Prototype\Reports\Report;
use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Report::class)]
class ReportTest extends TestCase
{
    private Report $reportTemplate;

    /** @var array<int, array{id: string, locale: string}> */
    private array $clients = [
        ['id' => 'client_001', 'locale' => 'pt_PT'],
        ['id' => 'client_002', 'locale' => 'en_US'],
        ['id' => 'client_003', 'locale' => 'es_ES'],
    ];

    /** @var array<string, string> */
    private array $filters = [
        'date_from' => '2024-01-01',
        'date_to'   => '2024-12-31',
    ];

    #[Before]
    protected function customizeData(): void
    {
        $this->reportTemplate = new Report(
            columns: ['name', 'email', 'total_spent'],
            filters: $this->filters,
            format: 'pdf'
        );
    }

    #[Test]
    public function canCloneAndCustomizeReport(): void
    {
        foreach ($this->clients as $client) {
            $customReport = $this->reportTemplate->clone();
            $customReport->setClient($client['id'], $client['locale']);

            $expectedOutput = $this->expectedRenderOutput(
                $client['id'],
                $client['locale'],
                'pdf',
                ['name', 'email', 'total_spent'],
                $this->filters
            );

            $this->assertSame(
                expected: $expectedOutput,
                actual: $customReport->render()
            );
        }
    }

    /**
     * @param string $clientId
     * @param string $locale
     * @param string $format
     * @param string[] $columns
     * @param array<string, mixed> $filters
     * @return string
     */
    private function expectedRenderOutput(
        string $clientId,
        string $locale,
        string $format,
        array $columns,
        array $filters
    ): string {
        return sprintf(
            "Report for client [%s] with locale [%s] in format [%s]\n" .
            "Columns: %s\nFilters: %s",
            $clientId,
            $locale,
            $format,
            implode(', ', $columns),
            json_encode($filters)
        );
    }
}
