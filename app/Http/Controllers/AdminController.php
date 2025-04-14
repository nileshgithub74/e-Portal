<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $services = Service::all();
        $team = Team::all();
        $plans = PricingPlan::all();

        return view('admin.dashboard', compact('services', 'team', 'plans'));
    }

    public function editService($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Service updated successfully');
    }

    public function editTeam($id)
    {
        $member = Team::findOrFail($id);
        return view('admin.team.edit', compact('member'));
    }

    public function updateTeam(Request $request, $id)
    {
        $member = Team::findOrFail($id);
        $member->update($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Team member updated successfully');
    }

    public function editPlan($id)
    {
        $plan = PricingPlan::findOrFail($id);
        return view('admin.plans.edit', compact('plan'));
    }

    public function updatePlan(Request $request, $id)
    {
        $plan = PricingPlan::findOrFail($id);
        $plan->update($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Pricing plan updated successfully');
    }
} 