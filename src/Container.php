<?php

namespace App;

class Container {
    private $services = [];

    public function addService(
        string $name,
        \Closure $closure
    ): void
    {
        $this->services[$name] = $closure;
    }

    public function hasService(string $name): bool
    {
        return isset($this->services[$name]);
    }

    public function getService(string $name)
    {
        if (!$this->hasService($name)) {
            return null;
        }

        if ($this->services[$name] instanceof \Closure) {
            $this->services[$name] = $this->services[$name]();
        }

        return $this->services[$name];
    }

    public function getServices(): array
    {
        return [
            'services' => array_keys($this->services)
        ];
    }
}