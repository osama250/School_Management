<?php

namespace App\Repository;


interface StudentRepositoryInterface {

   //  Get_Student
   public function Get_Student();

    // Get classrooms
   public function Get_classrooms($id);

   //Get Sections
   public function Get_Sections($id);

    // Get Add Form Student
   public function Create_Student();

    //Store_Student
   public function Store_Student($request);

   // Edit_Student
   public function Edit_Student($id);

    // Update_Student
   public function Update_Student($request);

   // Show_Student
   public function Show_Student($id);

   //Delete_Student
   public function Delete_Student($request);

   //Upload_attachment
   public function Upload_attachment($request);

   //Download_attachment
   public function Download_attachment($studentsname,$filename);

   //Delete_attachment
   public function Delete_attachment($request);
}
