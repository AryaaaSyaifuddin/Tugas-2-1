<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link href="css/adminStyle.css" rel="stylesheet">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/admin" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">'AdminHub'</span>
        </a>
		<ul class="side-menu top">
			<li class="active">
				<a href="">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/admin">
					<i class='bx bxs-group' ></i>
					<span class="text">Volunteer</span>
				</a>
			</li>
			<li>
                <a href="/admin">
                    <i class='bx bxs-wallet' ></i>
                    <span class="text">Donation</span>
                </a>
            </li>
			<li>
				<a href="/admin">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Kontak</span>
				</a>
			</li>
            <li>
				<a href="/admin">
					<i class='bx bxs-cart' ></i>
					<span class="text">Belanja</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
                <a href="/">
                    <i class='bx bxs-log-out-circle' style="color: rgb(173, 0, 0)"></i>
                    <span class="text" style="color: rgb(173, 0, 0)">Logout</span>
                </a>
            </li>

		</ul>
	</section>
	<!-- SIDEBAR -->

    <script>
        // Event listener untuk tombol logout admin
        document.getElementById('admin-logout-button').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah navigasi link
            document.getElementById('admin-logout-form').submit(); // Kirim form logout
        });
    </script>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
            <i class='bx bx-menu' ></i>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->
        

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				{{-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> --}}
			</div>

			<ul class="box-info">
				<li>
                    <i class='bx bxs-lock-alt'></i>
                    <span class="text">
                        <h3>230</h3>
                        <p>Total Account</p>
                    </span>
                </li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>567</h3>
						<p>Total Volunteer</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Donation</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
                    <div class="head">
                        <h3>Recent Volunteer</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <th>Event</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach($volunteers as $volunteer)
                                <tr>
                                    <td>
                                        <p>{{ $volunteer->username }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $volunteer->created_at->format('d-m-Y H:i') }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $volunteer->event }}</p>
                                    </td>
                                    <td>
                                        <span class="status {{ $volunteer->status == 'accepted' ? 'completed' : 'pending' }}">
                                            {{ ucfirst($volunteer->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>

				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="/js/admin.js"></script>
</body>
</html>
