<style>
	.card {
	position: relative;
	background-color: #30344c;
	padding: 1em;
	z-index: 5;
	box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.3);
	border-radius: 10px;
	max-width: 300px;
	transition: 200ms ease-in-out;
	}

	.username {
	color: #C6E1ED;
	font-size: 0.85em;
	font-weight: 600;
	}

	.body {
	display: flex;
	flex-direction: column;
	}

	.body .text {
	margin: 0 10px 0 0;
	white-space: pre-line;
	color: #c0c3d7;
	font-weight: 400;
	line-height: 1.5;
	margin-bottom: 4px;
	}

	.footer {
	position: relative;
	width: 100%;
	color: #9fa4aa;
	font-size: 12px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	border: none;
	margin-top: 10px;
	}

	.footer div {
	margin-right: 1rem;
	height: 20px;
	display: flex;
	align-items: center;
	cursor: pointer;
	}

	.footer svg {
	margin-right: 5px;
	height: 100%;
	stroke: #9fa4aa;
	}

	.viewer span {
	height: 20px;
	width: 20px;
	background-color: rgb(28, 117, 219);
	margin-right: -6px;
	border-radius: 50%;
	border: 1px solid #fff;
	display: grid;
	align-items: center;
	text-align: center;
	font-weight: bold;
	font-size: 8px;
	color: #fff;
	padding: 2px;
	}

	.viewer span svg {
	stroke: #fff;
	}
</style>
<div class="row">
	<?php foreach($kritik as $k) { ?>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="card">
				<div class="body">
					<p class="text"><?= $k['kritik'] ?></p>
					<span class="username">from: <?= $k['nama'] ?></span>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
