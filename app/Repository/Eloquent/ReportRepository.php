<?php

namespace App\Repositories\Eloquent;

use App\Models\Report;
use App\Repositories\ReportRepositoryInterface;
use Illuminate\Support\Collection;

class ReportRepository extends BaseRepository implements ReportRepositoryInterface
{
    /**
     * ReportRepository constructor
     *
     * @param Report $model
     */
    public function __construct(Report $model)
    {
        parent::__construct($model);
    }

}
