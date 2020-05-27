<section class="team_area p_120">
  <div class="container">
    <div class="main_title">
      <p class="titulo-docentes"><?php echo $career_title; ?></p>
    </div>
    <div class="row team_inner">
      <?php
        foreach ($teachers as $teacher):
					$teacher_url		=	$teacher['url'];
					$teacher_photo	=	$teacher['photo'];
					$teacher_name		=	$teacher['name'];

					include 'teacherProfile.php';
				endforeach;
      ?>
    </div>
  </div>
</section>