<?php

namespace App\Repository;

use App\Models\Address;
use Illuminate\Support\Facades\DB;

class AddressRepository
{
    public function getAll()
    {
        return Address::all();
    }

    public function find($id)
    {
        return Address::find($id);
    }

    public function create($nickname, $cep, $digit, $complement, $superscription, $district, $city,
                           $state, $reference, $user_id)
    {
        try {
            DB::beginTransaction();

            $address = new Address;
            $address->nickname = $nickname;
            $address->cep = $cep;
            $address->digit = $digit;
            $address->complement = $complement;
            $address->superscription = $superscription;
            $address->district = $district;
            $address->city = $city;
            $address->state = $state;
            $address->reference = $reference;
            $address->user_id = $user_id;
            $address->save();

            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
        }
    }

    public function delete($id)
    {
        return Address::find($id)->delete();
    }
}
