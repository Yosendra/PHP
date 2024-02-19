<?php

trait CanRun
{
    public abstract function run(): void;           # abstract method, wajib dioverride oleh class pengguna trait CanRun
}