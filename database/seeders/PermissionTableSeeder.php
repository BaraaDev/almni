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

            // permission student
            'student-list',
            'student-create',
            'student-edit',
            'student-delete',

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
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
