<?php
namespace App;

class User {
    private string $name;
    private bool $active;

    public function __construct(string $name, bool $active = true) {
        $this->name = $name;
        $this->active = $active;
    }

    public function getName(): string {
        return $this->name;
    }

    public function isActive(): bool {
        return $this->active;
    }

    public function deactivate() {
        $this->active = false;
    }
}
