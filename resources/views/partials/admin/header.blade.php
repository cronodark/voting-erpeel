<div class="header container-fluid bg-white fixed-top shadow-md">
    <div id="menu-jk" class="nav-col text-white">
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="col-lg-12 py-4 d-flex justify-content-between align-items-center">
                <h1 class="text-dark fs-4">Voting RPL</h1>
                <div class="dropdown">
                    <h1 class="dropdown-toggle fs-5" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin</h1>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                            <form action="{{ route('auth.logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- </div> --}}
        </div>
    </div>
</div>
