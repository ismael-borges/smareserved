<?php

namespace App\Repository;

use App\Models\Address;

class AddressRepository
{
    public function __construct(
        private Address $address
    ){}

    public function getAll()
    {
        return $this->address->all();
    }

    public function find($id)
    {
        return $this->address->find($id);
    }

    public function create($data)
    {
        $this->address->create($data);
    }

    public function update($data)
    {
        $this->address->update($data);
    }
}
