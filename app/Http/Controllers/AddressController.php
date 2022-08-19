<?php

namespace App\Http\Controllers;

use App\Repository\AddressRepository;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $this->addressRepository->create($data);

        return redirect()->route('address.index');
    }

    public function edit($id)
    {
        $address = $this->addressRepository->find($id);

        return view('address.form', compact('address'));
    }

    public function update(Request $request, $id)
    {

        if (!$address = $this->addressRepository->find($id)) {
            return redirect()->route('address.index');
        }

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $address->update($data);

        return redirect()->route('address.index');
    }

    public function destroy($id)
    {
        if (!$address = $this->addressRepository->find($id)) {
            return redirect()->route('address.index');
        }

        $address->delete();

        return redirect()->route('address.index');
    }
}
