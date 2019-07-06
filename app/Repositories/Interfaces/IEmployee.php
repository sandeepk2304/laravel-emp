<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface IEmployee
{
    /**
     * Get's a employee by it's ID
     *
     * @param int
     */
    public function getById(int $id);

    /**
     * Get's all Data
     *
     * @return mixed
     */
    public function all(int $limit = 10);

    /**
     * Deletes a record.
     *
     * @param int
     */
    public function delete(int $id);

    /**
     * Updates a record.
     *
     * @param int
     * @param array
     */
    public function update(Request $request, int $id);

    public function create(Request $request);

    /*
     To get departments
    */
    public function getDepartments();
}