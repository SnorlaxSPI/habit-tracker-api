<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use App\Http\Resources\HabitResource;
use App\Http\Requests\StoreHabitRequest;

class HabitController extends Controller
{
    public function index()
    {
        return HabitResource::collection(
            Habit::all()
        );
    }

    public function show(Habit $habit)
    {
        return HabitResource::make($habit);
    }

    public function store(StoreHabitRequest $request)
    {
        $data = $request->validated();

        $habit = Habit::create($data);

        return HabitResource::make($habit);
    }
}
