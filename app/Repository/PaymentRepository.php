<?php

namespace App\Repository;

use App\Models\Payment;

class PaymentRepository
{
    public function __construct(
        private Payment $payment
    ){}

    public function getAll()
    {
        return $this->payment->all();
    }

    public function create(array $data)
    {
        return $this->payment->create($data);
    }

    public function find($id)
    {
        return $this->payment->find($id);
    }

    public function delete($id)
    {
        $payment = $this->payment->find($id);
        return $payment->delete();
    }
}
