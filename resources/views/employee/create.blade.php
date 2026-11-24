<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand"><i class="bi-hexagon-fill me-2"></i> Data Master</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('employees.index') }}" class="nav-link">Employee List</a></li>
                </ul>
                <hr class="d-md-none text-white-50">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item btn-outline-light rounded">
                        <a href="{{ route('profile') }}" class="nav-link">
                        <i class="bi-person-circle me-1"></i> My Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="card border-light p-4 bg-light shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="bi-person-circle fs-1 text-secondary"></i>
                        <h4 class="mt-2">Create Employee</h4>
                    </div>
                    <hr class="my-4">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input class="form-control @error('firstName') is-invalid @enderror" type="text"
                            name="firstName" id="firstName" value="{{ old('firstName') }}" placeholder="Enter First Name">
                            @error('firstName')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control @error('lastName') is-invalid @enderror" type="text"
                            name="lastName" id="lastName" value="{{ old('lastName') }}" placeholder="Enter Last Name">
                            @error('lastName')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="text"
                            name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email">
                            @error('email')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input class="form-control @error('age') is-invalid @enderror" type="text"
                            name="age" id="age" value="{{ old('age') }}" placeholder="Enter Age">
                            @error('age')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select name="position" id="position" class="form-select">
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}" {{ old('position') == $position->id ? 'selected' : '' }}>{{ $position->code.' - '.$position->name }}</option>
                            @endforeach
                            </select>
                            @error('position')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg">
                            <i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg"><i class="bi-check-circle-fill me-2">
                            </i> Save</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
