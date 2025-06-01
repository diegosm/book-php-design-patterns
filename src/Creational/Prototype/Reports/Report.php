<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype\Reports;

final class Report implements ClonableInterface
{
    /**
     * @param string[]         $columns
     * @param array<string, mixed> $filters
     */
    public function __construct(
        protected array $columns = [],
        protected array $filters = [],
        protected string $format = 'csv',
        protected ?string $clientId = null,
        protected ?string $locale = null,
    ) {
    }

    /**
     * @param string|null $clientId
     * @param string|null $locale
     */
    public function setClient(?string $clientId, ?string $locale): void
    {
        $this->clientId = $clientId;
        $this->locale = $locale;
    }

    public function render(): string
    {
        $columns = implode(', ', $this->columns);
        $filters = json_encode($this->filters);

        return sprintf(
            "Report for client [%s] with locale [%s] in format [%s]\n" .
            "Columns: %s\nFilters: %s",
            $this->clientId ?? 'N/A',
            $this->locale ?? 'N/A',
            $this->format,
            $columns,
            $filters
        );
    }

    public function clone(): static
    {
        return new static(
            $this->columns,
            $this->filters,
            $this->format,
            $this->clientId,
            $this->locale
        );
    }
}
