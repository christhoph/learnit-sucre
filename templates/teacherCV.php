<section class="course_details_area p_120">
  <div class="container course-container">
    <div class="col-lg-12 course_details_inner">
      <div class="col-lg-12 row justify-content-between p-0 m-0">
        <div class="col-lg-5 teacher-content-img">
          <img class="img-fluid-docentecv" src="<?php echo $teacher_photo; ?>" alt="<?php echo $teacher_name; ?>">
        </div>
        <div class="col-lg-7 c_details_list">
          <h2 class="Name_Doce"><?php echo $teacher_name; ?></h2>
          <br>
          <ul class="list">
            <li class="list-item-detail">
              <a class="list-title-space">Título: </a>
              <span><?php echo $teacher_professional_title; ?></span>
            </li>
            <li class="list-item-detail">
              <a class="list-title-space">Docente: </a>
              <span><?php echo $teacher_educational; ?></span>
            </li>
            <li class="list-item-detail">
              <a class="list-title-space">Carrera: </a>
              <span><?php echo $teacher_career; ?></span>
            </li>
            <li class="list-item-detail teacher-email">
              <a class="list-title-space">Correo: </a>
              <span><?php echo $teacher_email; ?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>