<?php
declare(strict_types=1);

namespace TBolier\RethinkQL\Query\Operation;

use TBolier\RethinkQL\Message\MessageInterface;
use TBolier\RethinkQL\RethinkInterface;
use TBolier\RethinkQL\Types\Term\TermType;

class DbCreate extends AbstractOperation
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param RethinkInterface $rethink
     * @param MessageInterface $message
     * @param string $name
     */
    public function __construct(RethinkInterface $rethink, MessageInterface $message, string $name) {
        parent::__construct($rethink, $message);

        $this->rethink = $rethink;
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            TermType::DB_CREATE,
            [
                [
                    TermType::DATUM,
                    $this->name,
                ],
            ],
        ];
    }
}