<?php

$this ->extend('layout/main');
$this ->section('body');

?>

<h1>Add Student </h1>
<form action="/students/store" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
    <label for="studentName" class="form-label">Student name</label>
    <input type="text" class="form-control" name="studentName">
    </div>
    <div class="mb-3">
    <label for="studNum" class="form-label">Student Number</label>
    <input type="text" class="form-control" name="studNum" value="<?= $studentNumber; ?>" readonly>
    </div>
    <div class="mb-3">
    <label for="studentSection" class="form-label">Student Section</label>
    <input type="text" class="form-control" name="studentSection" id="" >
    </div>
    <div class="mb-3">
    <label for="studentCoursestudNum" class="form-label">Student Course</label>
    <input type="text" class="form-control" name="studentCourse" id="" >
    </div>
    <div class="mb-3">
    <label for="studentBatch" class="form-label">Student Batch</label>
    <input type="text" class="form-control" name="studentBatch" id="" >
    </div>
    <div class="mb-3">
    <label for="studentLevel" class="form-label">Student Level</label>
    <input type="text" class="form-control" name="studentLevel" id="" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<?php $this->endSection(); ?>