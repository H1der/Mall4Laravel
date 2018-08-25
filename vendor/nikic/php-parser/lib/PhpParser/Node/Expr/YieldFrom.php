<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class YieldFrom extends Expr
{
    /** @var Expr Expression to yield from */
    public $expr;

    /**
     * Constructs an "yield from" node.
     *
     * @param Expr $expr Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(Expr $expr, array $attributes = [])
    {
        parent::__construct($attributes);
        $this->expr = $expr;
    }

    public function getSubNodeNames(): array
    {
        return ['expr'];
    }

    public function getType(): string
    {
        return 'Expr_YieldFrom';
    }
}
