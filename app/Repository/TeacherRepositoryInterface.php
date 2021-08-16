<?php

namespace App\Repository;

interface TeacherRepositoryInterface
{

      // get all Teachers
        public function getAllTeachers();

      // Get specialization
        public function Getspecialization();

      // Get Gender
        public function GetGender();

      // StoreTeachers
        public function StoreTeacher($request);

      // StoreTeachers
        public function editTeacher($id);

      // UpdateTeachers
        public function UpdateTeacher($request);

      // DeleteTeachers
        public function DeleteTeacher($request);
}
