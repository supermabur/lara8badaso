<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->seed(TrtestCRUDDataTypeAdded::class);
        $this->seed(TrtestCRUDDataRowAdded::class);
        $this->seed(MstimagingCRUDDataTypeAdded::class);
        $this->seed(MstimagingCRUDDataRowAdded::class);
        $this->seed(MstbannerCRUDDataTypeAdded::class);
        $this->seed(MstbannerCRUDDataRowAdded::class);
    }
}
