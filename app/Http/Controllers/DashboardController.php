<?php

namespace App\Http\Controllers;

use App\Repository\SignatureRepository;
use Illuminate\Http\Request;

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
    {}

    public function destroy($id)
    {}
}
