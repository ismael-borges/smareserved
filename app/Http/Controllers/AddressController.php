<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAddressFormRequest;
use App\Repository\AddressRepository;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function __construct(
        private AddressRepository $addressRepository
    ){}

    public function index()
    {
        $addresses = $this->addressRepository->getAll();

        return view('address.index', compact('addresses'));
    }

    public function create()
    {
        $address = null;
        return view('address.form', compact('address'));
    }

    public function store(StoreUpdateAddressFormRequest $request)
    {
        $data = $request->only('nickname', 'cep', 'digit', 'complement', 'superscription',
            'district', 'city', 'state', 'reference');
        $this->addressRepository->create($data['nickname'], $data['cep'], $data['digit'], $data['complement'],
            $data['superscription'], $data['district'], $data['city'], $data['state'], $data['reference'], Auth::id());

        return redirect()->route('address.index');
    }

    public function edit($id)
    {
        $address = $this->addressRepository->find($id);

        return view('address.form', compact('address'));
    }

    public function update(StoreUpdateAddressFormRequest $request, $id)
    {

        if (!$address = $this->addressRepository->find($id)) {
            return redirect()->route('address.index');
        }

        $data = $request->only('nickname', 'cep', 'digit', 'complement', 'superscription',
            'district', 'city', 'state', 'reference');
        $data['user_id'] = Auth::id();
        $address->update($data);

        return redirect()->route('address.index');
    }

    public function destroy($id)
    {
        $this->addressRepository->delete($id);
        return redirect()->route('address.index');
    }
}
