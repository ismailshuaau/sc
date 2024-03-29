<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ReportRepositoryInterface;

class ReportController extends Controller
{
    // use SoftDeletes;

    /**
     * @var ReportRepositoryInterface
     */
    protected $report;


    /**
     * @param ReportRepositoryInterface $reportRepository
     */
    public function __construct(ReportRepositoryInterface $reportRepository)
    {
        $this->reportRepository = $reportRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = $this->reportRepository->index();
        return view('dashboard.index', compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255'
        ]);

        try {
            $result['data'] = $this->reportRepository->store($validatedData);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        // If sucessful
        $result['status'] = 200;

        return response()->json($result, $result['status']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $result['data'] = $this->reportRepository->show($id);
        } catch(Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        // If sucessful
        $result['status'] = 200;

        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255'
        ]);

        try {
            $result['data'] = $this->reportRepository->update($validatedData, $id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        // If sucessful
        $result['status'] = 200;

        return response()->json($result, $result['status']);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param string    $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result['data'] = $this->reportRepository->destroy($id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        // If sucessful
        $result['status'] = 200;

        return response()->json($result, $result['status']);
    }
}
