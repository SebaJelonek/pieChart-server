<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pieChartModel;

class pieChartController extends Controller
{
    public function store(Request $request)
    {
      $pieChart = new pieChartModel;
      $pieChart->title = $request->input('title');
      $pieChart->value = $request->input('value');
      $pieChart->color = $request->input('color');
      $pieChart->save();

      return response()->json([
        'status' => 200,
        'message' => 'Data has been added'
      ]);
    }
    public function sendData()
    {
      $pieChart = pieChartModel::all();
      return response()->json([
        'status' => 200,
        'companyData' => $pieChart
      ]);
    }
    public function editValue(Request $request, $id)
    {
      $pieChart = pieChartModel::find($id);
      $pieChart->value = $request->input('value');
      $pieChart->update();

      return response()->json([
        'status' => 200,
        'message' => 'Company value has been updated'
      ]);
    }

    public function remove($id)
    {
      $pieChart = pieChartModel::find($id);
      $pieChart->delete();

      return response()->json([
        'status' => 200,
        'message' => 'Record has been deleted'
      ]);
    }
}
