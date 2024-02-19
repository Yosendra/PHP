<?php

trait SayGoodBye                                    # definisikan trait SayGoodBye
{
    public function goodBye(?string $name = null): void
    {
        if (is_null($name))
            echo "Good Bye" . PHP_EOL;
        else
            echo "Good Bye $name" . PHP_EOL;
    }
}