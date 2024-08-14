<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\EmployeeDesignation;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeDesignationResource;
use App\Http\Requests\StoreEmployeeDesignationRequest;
use App\Http\Requests\UpdateEmployeeDesignationRequest;

class EmployeeDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EmployeeDesignationResource::collection(EmployeeDesignation::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeDesignationRequest $request)
    {
        $employeeDesignation = EmployeeDesignation::create($request->validated());

        return EmployeeDesignationResource::make($employeeDesignation);
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeDesignation $employeeDesignation)
    {
        return EmployeeDesignationResource::make($employeeDesignation);
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeDesignationRequest $request, EmployeeDesignation $employeeDesignation)
    {
        $employeeDesignation->update($request->validated());

        return EmployeeDesignationResource::make($employeeDesignation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeDesignation $employeeDesignation)
    {
        $employeeDesignation->delete();

        return response()->noContent();
    }
}
