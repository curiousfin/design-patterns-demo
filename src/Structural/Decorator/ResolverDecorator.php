<?php
declare(strict_types=1);

namespace Curiousfin\DesignPatternsDemo\Structural\Decorator;

class ResolverDecorator implements ResolverInterface
{
    public function __construct(private ResolverInterface $resolver)
    {
    }

    public function resolve($name): string
    {
        return sprintf('Resolved by decorator %s', $this->resolver->resolve($name));
    }
}