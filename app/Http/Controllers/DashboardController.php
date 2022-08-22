<?php

namespace App\Http\Controllers;

use App\Repository\SignatureRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct(
        private SignatureRepository $signatureRepository
    ) {}

    public function index()
    {
        $signatures = $this->signatureRepository->getAll();
        return view('dashboard.index', compact(['signatures']));
    }

    public function create()
    {}

    public function store(Request $request)
    {}

    public function show($id)
    {}

    public function edit($id)
    {}

    public function update(Request $request, $id)
    {
        $signature = $this->signatureRepository->find($id);
        $data = $request->only('fgstatus');
        $data['user_id'] = Auth::id();
        $signature->update($data);

        return redirect()->route('dashboard.index');
    }

    public function destroy($id)
    {}
}
