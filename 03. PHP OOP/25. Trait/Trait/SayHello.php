<?php

trait SayHello                                      # definisikan trait SayHello
{
    public function hello(?string $name = null): void
    {
        if (is_null($name))
            echo "Hello" . PHP_EOL;
        else
            echo "Hello $name" . PHP_EOL;
    }
}