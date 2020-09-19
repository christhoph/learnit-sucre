<section class="course_details_area p_120">
	<div class="container course-container ">
		<hr>
		<h2 class="text-primary text-center"><?php echo $course_title; ?></h2>
		<hr>
		<div class="col-lg-12 course_details_inner">
			<div class="col-lg-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link nav-link-button active" id="comments-tab" data-toggle="tab" href="#comments" role="tab"
							aria-controls="comments" aria-selected="false">Información General</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-button" id="home-tab" data-toggle="tab" href="#home" role="tab"
							aria-controls="home" aria-selected="true">Oferta Institucional</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-button" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
							aria-controls="profile" aria-selected="false">Programas Coorporativos</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="comments-tab">
						<div class="comments-area">
							<div class="top-container">
                <div class="info-rector">
                  <img src="<?php echo $course_image; ?>" alt="" class="img-fluid">
                </div>
                <div>
                  <?php
                    foreach ($course_description as $value):
                      echo '<p class="text-justify">' . $value . '</p>';
                    endforeach;
                  ?>
                </div>
              </div>
							<h6 class="diri colo">COMPETENCIAS DEL PERFIL:</h6>
							<ol>
                <?php
                  foreach ($course_profile as $item):
                    echo '<li>' . $item . '</li>';
                  endforeach;
                ?>
							</ol>
						</div>
					</div>
					<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="objctive_text">
							<p>
                <b class="diri colo"> Inicio: </b>
                <?php echo $course_init; ?>
							</p>
							<p>
                <b class="diri colo"> Dirigido a: </b>
                <?php echo $course_to; ?>
							</p>
							<!-- tabla -->
							<div class="row">
								<div class="col-12 table-responsive">
									<br>
									<table class="table table-striped table-bordered  ">
										<thead class="bg-primary text-white text-uppercase text-center">
											<tr>
												<th scope="col">SERVICIO</th>
												<th scope="col">DURACIÓN</th>
												<th scope="col">CICLO DE INICIO</th>
											</tr>
										</thead>
										<tbody>
                      <?php
                        foreach ($course_services as $services):
                          echo '<tr>';
                            foreach ($services as $service):
                              echo '<td>' . $service . '</td>';
                            endforeach;
                          echo '</tr>';
                        endforeach;
                      ?>
										</tbody>
									</table>
									<br>
								</div>
							</div>
							<!--FIN TABLA-->
							<h4 class="diri colo">Requisitos del curso:</h4>
							<ul>
                <?php
                  foreach ($course_requirements as $requirement):
                    echo '<li>' . $requirement . '</li>';
                  endforeach;
                ?>
							</ul>
							<h4 class="diri colo">Contacto</h4>
							<p>
								Para más información comunicarse al número 02 2547-356 ext 104
								<br>Escribir a los correos sede norte <a href="#"> kguzman@tecnologicosucre.edu.ec</a>
								<br>Campus Sur: <a href="#"> rlema@tecnologicosucre.edu.ec </a>
								<br>Contacto adicional: <a href="#"> capacitacion@tecnologicosucre.edu.ec </a>
								<br>Visitar nuestras instalaciones en sede norte, sur.
							</p>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="objctive_text">
							<h4 class="diri colo">PROGRAMAS COORPORATIVOS</h4>
							<br>
              <ul style="list-style: none; padding: 0;">
                <?php
                  foreach ($course_programs as $program):
                    echo '<li>' . $program . '</li>';
                  endforeach;
                ?>
							</ul>
							<h4 class="diri colo"> Contacto </h4>
							<p>
								Para más información comunicarse al número 02 2547-356 ext 104
								<br>Escribir a los correos sede norte <a href="#"> kguzman@tecnologicosucre.edu.ec</a>
								<br>Campus Sur: <a href="#"> rlema@tecnologicosucre.edu.ec </a>
								<br>Contacto adicional: <a href="#"> capacitacion@tecnologicosucre.edu.ec </a>
								<br>Visitar nuestras instalaciones en sede norte, sur.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>