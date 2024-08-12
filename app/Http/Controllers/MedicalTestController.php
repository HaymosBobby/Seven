<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalTestRequest;
use App\Models\MedicalTestCategory;
use App\Notifications\MedicalTest;
use Illuminate\Support\Facades\Notification;

class MedicalTestController extends Controller
{
    public function getLabTests() {
        return response()->json([
            'message' => 'Request Successful',
            'data' => MedicalTestCategory::with(["tests"])->get()
        ], 200);
    }

    public function saveMedicalTest(MedicalTestRequest $request) {
        $html = '';
        foreach($request->lab_tests as $test) {
            $category = MedicalTestCategory::find($test['id']);
            $values = \App\Models\MedicalTest::whereIn('id', $test['values'])->get('name')->pluck('name')->toArray();
            $html .= "{$category?->name}: ". implode(', ', $values) ." <br>";
        };
        Notification::route('mail', 'peopleoperations@kompletecare.com')->notify(new MedicalTest($request->user(), $request->validated(), $html));

        return response()->json([
            'message' => 'Form submitted Successfully',
        ], 200);
    }
}
