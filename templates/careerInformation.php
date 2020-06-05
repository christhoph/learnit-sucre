<section class="course_details_area p_120">
	<div class="container course-container">
		<div class="col-lg-12 course_details_inner">
			<div class="col-lg-12 row justify-content-between p-0 m-0">
				<div class="col-lg-7 c_details_img">
					<img class="img-fluid2" src="<?php echo $career_image; ?>" alt="">
				</div>
				<div class="col-lg-5 c_details_list">
					<ul class="list">
						<li class="list-item-detail">
							<a class="list-title-space">Modalidad: </a>
							<span><?php echo $career_modality; ?></span>
						</li>
						<li class="list-item-detail">
							<a class="list-title-space">Duración: </a>
							<span><?php echo $career_duration; ?></span>
						</li>
						<li class="list-item-detail">
							<a class="list-title-space">Jornada: </a>
							<span><?php echo $career_time; ?></span>
						</li>
						<li class="list-item-detail">
							<a class="list-title-space">Costo: </a>
							<span><?php echo $career_price; ?></span>
						</li>
						<li class="list-item-detail">
							<a class="list-title-space">Título que otorga: </a>
							<span><?php echo $career_title; ?></span>
						</li>
						<li class="list-item-detail">
							<a class="list-title-space">Campus: </a>
							<span><?php echo $career_campus; ?></span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link nav-link-button active" id="comments-tab" data-toggle="tab" href="#comments" role="tab"
							aria-controls="comments" aria-selected="false">Requisitos ingreso</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-button" id="home-tab" data-toggle="tab" href="#home" role="tab"
							aria-controls="home" aria-selected="true">Perfil de Egreso</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-button" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
							aria-controls="profile" aria-selected="false">Campo Ocupacional</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-button" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
							aria-controls="contact" aria-selected="false">Malla Curricular</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="comments-tab">
						<div class="comments-area">
							<?php
                if ($requirements):
                  echo '<ul class="comment-text-justify">';
                    foreach ($requirements as $requirement):
                      echo '<li>' . $requirement . '</li>';
                    endforeach;
                  echo '</ul>';
								else:
									echo '<p class="comment-text-justify">';
									echo '<h5>Primer Semestre</h5>';
                  echo '<ol>';
                    foreach ($first_semester_requirements as $requirement):
                      echo '<li>' . $requirement . '</li>';
                    endforeach;
									echo '</ol>';
									echo '<h5>Segundo a Sexto Semestre</h5>';
									echo '<ol>';
                    foreach ($more_semesters_requirements as $requirement):
                      echo '<li>' . $requirement . '</li>';
                    endforeach;
									echo '</ol>';
                  echo '</p>';
                endif;
              ?>
						</div>
					</div>
					<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="objctive_text">
              <?php
                foreach ($career_graduation_profile as $value):
                  echo '<p class="comment-text-justify">' . $value . '</p>';
                endforeach;
              ?>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="objctive_text">
              <?php
                if ($career_occupational_list):
                  echo '<p class="comment-text-justify">' . $career_occupational_list_title . '</p>';
                  echo '<ul class="comment-text-justify pl-3">';
                    foreach ($career_occupational_list as $value):
                      echo '<li>' . $value . '</li>';
                    endforeach;
                  echo '</ul>';
                else:
                  foreach ($career_occupational_field as $value):
                    echo '<p class="comment-text-justify">' . $value . '</p>';
                  endforeach;
                endif;
              ?>
						</div>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="objctive_text">
              <?php if ($career_table_description_initial): echo '<p class="comment-text-justify">' . $career_table_description_initial . '</p>'; endif; ?>
							<div class="table-responsive my-5 table-container">
								<table class="table table-striped table-bordered">
									<thead class="bg-primary text-white text-uppercase text-center">
										<tr>
                      <?php
                        $periods = array(
                          'Periodo I',
                          'Periodo II',
                          'Periodo III',
                          'Periodo IV',
                          'Periodo V',
                          'Periodo VI',
                          'Periodo VII',
                          'Periodo VIII',
                          'Periodo IX',
                          'Periodo X',
                        );

                        foreach (array_keys($curriculum[0]) as $index):
                          echo '<th scope="col" class="col-width">' . $periods[$index] . '</th>';
                        endforeach;
                      ?>
										</tr>
									</thead>
									<tbody>
                    <?php
                      foreach ($curriculum as $subjects):
                        echo '<tr>';
                          foreach ($subjects as $subject):
                            echo '<td class="text-center col-width">' . $subject . '</td>';
                          endforeach;
                        echo '</tr>';
                      endforeach;
                    ?>
									</tbody>
								</table>
              </div>
              <?php if ($career_table_description_final): echo '<p class="comment-text-justify">' . $career_table_description_final . '</p>'; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>