<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // permission category
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',

            // permission city
            'city-list',
            'city-create',
            'city-edit',
            'city-delete',

            // permission course
            'course-list',
            'course-create',
            'course-edit',
            'course-delete',

            // permission group
            'group-list',
            'group-create',
            'group-edit',
            'group-delete',

            // permission instructor
            'instructor-list',
            'instructor-create',
            'instructor-edit',
            'instructor-delete',

            // permission lecture
            'lecture-list',
            'lecture-create',
            'lecture-edit',
            'lecture-delete',

            // permission level
            'level-list',
            'level-create',
            'level-edit',
            'level-delete',

            // permission role
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            // permission instructors
            'instructors-list',
            'instructors-create',
            'instructors-edit',
            'instructors-delete',

            // permission subject
            'subject-list',
            'subject-create',
            'subject-edit',
            'subject-delete',

            // permission user
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            // permission expenses
            'expenses-list',
            'expenses-create',
            'expenses-edit',
            'expenses-delete',

            // permission salaries
            'salaries-list',
            'salaries-create',
            'salaries-edit',
            'salaries-delete',
            'reports-salaries',
            'reports-salary',

            // permission bunches
            'bunches-list',
            'bunches-create',
            'bunches-edit',
            'bunches-delete',
            'reports-bunches',

            // permission classrooms
            'classrooms-list',
            'classrooms-create',
            'classrooms-edit',
            'classrooms-delete',

            // permission life-stage
            'life-stage-list',
            'life-stage-create',
            'life-stage-edit',
            'life-stage-delete',
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
