		<div class="d-flex justify-content-center w-100 video">
			<video width="auto" height="auto" controls>
				<source src="<?= base_url('asset/video/' . $portfolio['portfolio_file']) ?>" type="video/mp4">
			</video>
		</div>
		<div class="avatar">
			<div class="annotation">
				<h5>Before you start your first day with us, let’s we watch about FXMedia specialities.</h5>
				<div class="button text-center mt-4">
					<a id="link" href="">
						<button type="button" class="btn button-avatar">Start</button>
					</a>
				</div>
			</div>
		</div>
		</div>
		</section>

		<section id="footer">
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-5 d-flex mr-3 align-items-center">
							<img src="<?= base_url('asset/image/logo.png') ?>" alt="" width="80" height="auto">
						</div>
						<div class="col-xs-5">
							<span class="text-light">© 2021 All Rights Reserved</span>
						</div>
					</div>
				</div>
			</footer>
		</section>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="<?= base_url('asset/js/script.js') ?>"></script>

		<script>
			$(document).ready(function() {
				$(".button-avatar").one("click", function(event) {
					event.preventDefault();
					$(".avatar").addClass('d-none');
					$("video").get(0).play();
					$('video').css('pointer-events', 'auto');
				});
				$('video').on('ended', function() {
					$(".avatar").removeClass('d-none');
					$('.annotation h5').html('Go to Session Hr QnA');
					$('.button-avatar').html('Next Session');
					$("#link").attr('href', '<?= base_url('Home/hrQnA') ?>');
				});
			});
		</script>

		</body>

		</html>
