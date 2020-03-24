<?php

namespace TaskForce\actions;

class CreateAction extends AbstractAction
{
    public function getCaption(): string
    {
        return 'создать';
    }

    public function getName(): string
    {
        return 'create';
    }

    public function isAuthorized(int $userId, int $customerId, int $contractorId): bool
    {
        return !$customerId && !$contractorId; // && ROLE_CUSTOMER
    }
}