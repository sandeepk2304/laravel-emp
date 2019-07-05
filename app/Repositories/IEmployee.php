<?php

namespace App\Repositories;

interface IEmployee
{
    /**
     * Get's a employee by it's ID
     *
     * @param int
     */
    public function get(int $id);

    /**
     * Get's all Data
     *
     * @return mixed
     */
    public function all();

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
    public function update(int $id, array $data);

    /*
     To get departments
    */
    public function getDepartments();
}