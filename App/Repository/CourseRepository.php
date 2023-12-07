<?php

namespace App\Repository;

use App\Entity\Course;


class CourseRepository
{
    public function findOneById(int $id)
    {
        // appel bdd
        $course = ['id'=> 1, "name" =>'course test',"description"=>'description test',"date"=>'date test'];

        $courseEntity = new Course();
        $courseEntity->setId($course['id']);
        $courseEntity->setName($course['name']);
        $courseEntity->setDescription($course['description']);
        $courseEntity->setDate($course['date']);

        return $courseEntity;

    }
}